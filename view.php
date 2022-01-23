<?php

// $keys = array(
//     'id' => 'UUID',
//     'alternateTitles' => 'Alternate Titles',
//     'series' => 'Series',
//     'developer' => 'Developer',
//     'publisher' => 'Publisher',
//     'releaseDate' => 'Release Date',
//     'language' => 'Languages',
//     'applicationPath' => 'Application Path',
//     'launchCommand' => 'Launch Command'
// );
$keys = array(
    'id' => 'UUID',
    'applicationPath' => 'Application Path',
    'launchCommand' => 'Launch Command'
);
$id = $_GET['id'];
$db = new SQLite3('flashpoint.sqlite');
$stmt = $db->prepare('SELECT * FROM game WHERE id = :id');
$stmt->bindValue(':id', $id);
$result = $stmt->execute();
$game = $result->fetchArray(SQLITE3_ASSOC);
if (!$game) {
    header('HTTP/1.1 404 Not Found');
    die('Game not found');
}
$a = substr($id, 0, 2);
$b = substr($id, 2, 2);
$img = "$a/$b/$id.png";
?>
<!-- <img class="thumb" src="img/Logos/<?php echo $img ?>"> -->
<pre>
<?php
foreach($keys as $key => $name) {
    if ($game[$key]) {
        echo "$name: {$game[$key]}\n";
    }
}
?>
</pre>
<?php
$stmt = $db->prepare('SELECT * FROM additional_app WHERE parentGameId = :id');
$stmt->bindValue(':id', $id);
$result = $stmt->execute();
?>
<?php for($i = 0; $app = $result->fetchArray(SQLITE3_ASSOC); ++$i): ?>
<div class="app" style="margin-left:40px;">
    <?php 
    $app_id = $app['id'];
    echo ($app['applicationPath'] != ':extras:') ? "&#x270E; {$app['name']}" : "&#128193; {$app['launchCommand']}" ?>
    <?php if ($app['applicationPath'] != ':extras:'): ?>
    <form class="app-edit">
        <div class="form-row">
            <?php if ($app['applicationPath'] != ':message:'): ?>
                <div class="col-sm-3">
                <input class="form-control" type="text" name="app-name" id="app-name-<?php echo $app_id ?>" placeholder="Name" value="<?php echo "{$app['name']}" ?>" />
                </div>
                <div class="col-sm-3">
                <input class="form-control" list="app-path" type="text" name="app-path" id="app-path-<?php echo $app_id ?>" placeholder="App path" value="<?php echo "{$app['applicationPath']}" ?>" />
                </div>
            <?php endif; ?>
            <div class="col-sm-<?php echo ($app['applicationPath'] != ':message:') ? 3 : 9 ?>">
                <input class="form-control" type="text" name="app-lc" id="app-lc-<?php echo $app_id ?>" placeholder="<?php if ($app['applicationPath'] == ':message:') {echo "Message content";} else if ($app['applicationPath'] != ':extras:') {echo "Launch Command";} ?>" value="<?php echo "{$app['launchCommand']}" ?>"/>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary form-control" onclick="createSql('<?php echo $app_id ?>')">Create Edit</button>
            </div>
        </div>
    </form>
    <?php endif; ?>
</div>
<?php endfor ?>
<pre></pre>