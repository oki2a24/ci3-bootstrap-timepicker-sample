<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Timepicker サンプル</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('plugin/bootstrap-timepicker/css/bootstrap-timepicker.min.css'); ?>" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url('plugin/bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>"></script>
    </head>
    <body>
        <div class="container">
            <h1>Bootstrap Timepicker サンプル</h1>
            <form action="index" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input_fullname">氏名</label>
                    <div class="col-sm-10">
                        <input id="input_fullname" name="fullname" type="text" class="form-control" placeholder="氏名">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input_email">メール・アドレス</label>
                    <div class="col-sm-10">
                        <input id="input_email" name="email" type="email" class="form-control" placeholder="メール・アドレス">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="start_time">開始終了時刻: </label>
                    <div class="col-sm-10">
                        <div class="form-inline">
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="start_time" name="start_time" type="text" class="form-control input-small">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                            <script type="text/javascript">
                                $('#start_time').timepicker({
                                minuteStep: 1,
                                showMeridian: false
                            });
                            </script>
                            <span> 〜 </span>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="end_time" name="end_time" type="text" class="form-control input-small">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                            <script type="text/javascript">
                                $('#end_time').timepicker({
                                minuteStep: 1,
                                showMeridian: false
                            });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">送信</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container -->
    </body>
</html>