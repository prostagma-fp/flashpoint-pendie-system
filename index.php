<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Flashpoint's Average Pendie System</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<style>
    td { padding: 0 1em; }
    .thumb { object-fit: contain; width: 250px; max-height: 250px }
</style>
<div class="container" id="main">
    <h1>Flashpoint's Average Pendie System</h1>
    <div>If you were looking for regular meta edits, follow the <a href="https://bluemaxima.org/flashpoint/datahub/Metadata_Edits">usual method</a> instead of here</div>
    <div id="same-fields" style="display:none">It seems you have not changed any fields from that app.</div>
    <form id="search">
        <div class="form-row">
            <div class="col">
                <input class="form-control" type="text" name="q" placeholder="Type a game's name..." />
            </div>
            <div class="col-sm-2">
                <select class="form-control" name="by">
                    <option>Best match</option>
                    <option value="keywords">Keywords</option>
                    <option value="host">Hostname</option>
                    <option value="uuid">UUID</option>
                </select>
            </div>
        </div>
    </form>
    <div class="results"></div>
</div>
<datalist id="app-path">
    <option value=":browser-mode:"></option>
    <option value="FPSoftware\Basilisk-Portable\Basilisk-Portable.exe"></option>
    <option value="FPSoftware\Flash\5r30\FlashPla.exe"></option>
    <option value="FPSoftware\Flash\6r21\SAFlashPlayer.exe"></option>
    <option value="FPSoftware\Flash\6r4\SAFlashPlayer.exe"></option>
    <option value="FPSoftware\Flash\7r14\SAFlashPlayer.exe"></option>
    <option value="FPSoftware\Flash\8r22\SAFlashPlayer.exe"></option>
    <option value="FPSoftware\Flash\9r16\SAFlashPlayer.exe"></option>
    <option value="FPSoftware\Flash\flashplayer11_9r900_152_win_sa_debug.exe"></option>
    <option value="FPSoftware\Flash\flashplayer14_0r0_179_win_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer19_0r0_245_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer27_0r0_187_win_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer9r277_win_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer_10_3r183_90_win_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer_32_sa.exe"></option>
    <option value="FPSoftware\Flash\flashplayer_7_sa.exe"></option>
    <option value="FPSoftware\FlashpointSecurePlayer.exe"></option>
    <option value="FPSoftware\OldCPUSimulator\OldCPUSimulator.exe"></option>
    <option value="FPSoftware\Shockwave\PJ101\Projector.exe"></option>
    <option value="FPSoftware\Shockwave\PJ101\SPR.exe"></option>
    <option value="FPSoftware\Shockwave\PJ101\SPRD.exe"></option>
    <option value="FPSoftware\Shockwave\PJ1103\SPR.exe"></option>
    <option value="FPSoftware\Shockwave\PJ1159\Projector.exe"></option>
    <option value="FPSoftware\Shockwave\PJ1159\SPR.exe"></option>
    <option value="FPSoftware\Shockwave\PJ1159\SPRD.exe"></option>
    <option value="FPSoftware\Shockwave\PJ12\Projector.exe"></option>
    <option value="FPSoftware\Shockwave\PJ12\SPR.exe"></option>
    <option value="FPSoftware\Shockwave\PJ851\Projector.exe"></option>
    <option value="FPSoftware\Shockwave\PJ851\SPR.exe"></option>
    <option value="FPSoftware\Shockwave\PJ851\SPRS.exe"></option>
    <option value="FPSoftware\Shockwave\PJ9\SPR.exe"></option>
    <option value="FPSoftware\startActiveX.bat"></option>
    <option value="FPSoftware\startAlambik.bat"></option>
    <option value="FPSoftware\startAtmo212d.bat"></option>
    <option value="FPSoftware\startBasilisk_compat.bat"></option>
    <option value="FPSoftware\startBlaxxun44.bat"></option>
    <option value="FPSoftware\startBurster.bat"></option>
    <option value="FPSoftware\startChrome.bat"></option>
    <option value="FPSoftware\startCosmo211.bat"></option>
    <option value="FPSoftware\startGroove.bat"></option>
    <option value="FPSoftware\startJava.bat"></option>
    <option value="FPSoftware\startJavaInBrowser.bat"></option>
    <option value="FPSoftware\startLive3D.bat"></option>
    <option value="FPSoftware\startNetscape.bat"></option>
    <option value="FPSoftware\startRebol.bat"></option>
    <option value="FPSoftware\startSVR.bat"></option>
    <option value="FPSoftware\startShiVa.bat"></option>
    <option value="FPSoftware\startUnity.bat"></option>
    <option value="FPSoftware\startUnityFF.bat"></option>
    <option value="FPSoftware\startVRweb.bat"></option>
    <option value="FPSoftware\startXaraPlugin.bat"></option>
</datalist>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#search').on('submit', function(e) {
        e.preventDefault();
    });
    $('#search .form-control').on('input change', function(e) {
        $.post('search.php', $('#search').serialize(), function(data) {
            $('.results').html(data);
            $('.game-details').on('show.bs.collapse', function() {
                var id = $(this).data('id');
                $(this).load(`view.php?id=${id}`);
            });
        });
    });

    function createSql(app_id) {
        $("#same-fields").hide();
        var app_name = document.getElementById("app-name-" + app_id);
        var app_path = document.getElementById("app-path-" + app_id);
        var app_lc   = document.getElementById("app-lc-" + app_id);
        var changes = []
        if(app_name && app_name["value"] != app_name.getAttribute("value")) changes.push(`name = '${app_name['value']}'`);
        if(app_path && app_path["value"] != app_path.getAttribute("value")) changes.push(`applicationPath = '${app_path['value']}'`);
        if(app_lc && app_lc["value"] != app_lc.getAttribute("value")) changes.push(`applicationPath = '${app_lc['value']}'`);

        if (changes.length) {
            sql = `UPDATE additional_app SET ${changes.join(", ")} WHERE id = '${app_id}'`;
            saveAs(new File([sql], "edit.sql", {type: "text/plain;charset=utf-8"}));
        }
        else{
            $("#same-fields").show();
        }
}
</script>
</body>
</html>
