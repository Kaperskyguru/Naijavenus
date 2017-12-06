
<!DOCTYPE html>
<html>
    <?php
    include 'functions/prediction.php';
    include 'functions/general.php';
    include 'inc/header.php';
    ?>

    <div class="container-fluid">
        <div class="row">

            <!-- Side bar -->

            <div class="col-md-1">
                <?php include 'inc/sidebar.php'; ?>
            </div>

            <div class="col-md-11">
                <div id="main">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="panel panel-primary">
                                <div class="panel panel-heading">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <h2 class="panel-title" style="text-transform: uppercase">Add New Prediction</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-body">
                                    <div class="col-lg-10">
                                        <form role = "form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data" class="form-horizontal"> 

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" id="league">League:</label>
                                                <div class="col-sm-10">
                                                    <i id="errorCat"> </i>
                                                    <select class="form-control" name="league" id="league">
                                                        <option selected="selected">Select League</option>
                                                        <option>UCL</option>
                                                        <option>PL</option>
                                                        <option>Italian</option>
                                                        <option>UCL</option>
                                                        <option>UCL</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <br />

                                            <div class="form-group">
                                                <label for="title" class="control-label col-sm-2">Matches:</label>
                                                <div class="col-sm-10">
                                                    <i id="errorTitle"></i>
                                                    <input class="form-control" id="matches" type="text" name="matches" placeholder="Add New matches"/>
                                                </div>
                                            </div>

                                            <br/>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="odd">Odd:</label>
                                                <div class="col-sm-10">
                                                    <i id="errorSubtitle"> </i>
                                                    <select class="form-control" name="odd" id="odd">
                                                        <option selected="selected">Select Odd</option>
                                                        <option>2x</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>1x</option>
                                                        <option>x</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="qty" class="control-label col-sm-2">Scores:</label>
                                                <div class="col-sm-10">
                                                    <i id="errorQty"></i>
                                                    <input class="form-control" type="number" id="scores1" name="scores1" placeholder="Enter first Score" />
                                                    <label for="price" class="control-label">vs:</label>
                                                    <input class="form-control" id="score2" type="number" name="score2" placeholder="Enter Second Score"/>

                                                </div>
                                            </div>
                                                <div class="form-group"> 
                                                <div class="col-sm-offset-2 col-sm-10">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox"> Tommorow's Match?</label>
                                                  </div>
                                                </div>
                                              </div>
                                            <br />
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Add Match"/>
                                                    <span class="text-right text-success"></span>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <aside class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel panel-heading">
                                    <p class="panel-title">Yesterday's Winnings </p>
                                </div>
                                <div class="panel panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Matches</th>
                                                <th>Bet</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>2x</td>
                                                <td>1 - 2</td>
                                            </tr>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>1x</td>
                                                <td>2 - 0</td>
                                            </tr>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>1</td>
                                                <td>3 - 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-danger">
                                <div class="panel panel-heading">
                                    <p class="panel-title">Yesterday's losses </p>
                                </div>
                                <div class="panel panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Matches</th>
                                                <th>Bet</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>2x</td>
                                                <td>1 - 2</td>
                                            </tr>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>1x</td>
                                                <td>2 - 0</td>
                                            </tr>
                                            <tr>
                                                <td>Manchester City vs Feyenoord Rotterdam</td>
                                                <td>1</td>
                                                <td>3 - 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matches = $league = $odd = $scores1 = $score2 = "";

    if (empty($_POST["matches"])) {
        
    } else {
        $matches = sanitizer($_POST["matches"]);
    }

    if (empty($_POST['league'])) {
        
    } else {
        $league = sanitizer($_POST["league"]);
    }

    if (empty($_POST['odd'])) {
        
    } else {
        $odd = sanitizer($_POST["odd"]);
    }

    if (empty($_POST['scores1'])) {
        
    } else {
        $scores1 = sanitizer($_POST["scores1"]);
    }

    if (empty($_POST['score2'])) {
        
    } else {
        $score2 = sanitizer($_POST["score2"]);
    }

    addPrediction($matches, $league, $odd, $scores1, $score2);
} else {
}