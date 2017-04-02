<?php 
    require_once('phpscripts/init.php');
    date_default_timezone_set('America/New_York');
    $hour = date('G');
    $id = $_SESSION['users_creds'];
    $userlevel = $_SESSION['users_level'];
    $lastSession = $_SESSION['users_time'];
?>

        <div class="contentCon">
            <h1><?php   if ($hour >= 5 && $hour < 12) {echo "Good Morning";} 
                        else if ($hour >= 12 && $hour < 16) {echo "Good Afternoon";}
                        else if ($hour >= 16 || $hour < 5) {echo "Good Evening";}?>,
                <?php echo $_SESSION['users_name'];?>! 
                Welcome to the 
                <?php if ($userlevel == 1){ echo "Editor"; }
                      else if($userlevel == 2){ echo "Admin"; }
                      else if($userlevel == 3){ echo "Super Admin"; } ?>'s Panel.
            </h1>
        </div>

        <div id="admin-home">           
            <?php   if($userlevel == 1){
                        echo    "<div>
                                    <a href=\"index.php?partial=edit_stories\">Stories</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_stats\">Statistics</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_mythfact\">Myths vs Facts</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_social\">Facebook &amp; Twitter</a>
                                </div>";
                    }else if($userlevel == 2 || $userlevel == 3){
                        echo    "<div>
                                    <a href=\"index.php?partial=edit_home\">Home</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_learn\">Learn</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_stories\">Stories</a>
                                </div>
                                <div>
                                    <a href=\"index.php?partial=edit_share\">Share</a>
                                </div>";
                        if($userlevel == 3){
                            echo    "<div>
                                        <a href=\"index.php?partial=admin_users\">Users</a>
                                    </div>
                                    <div>
                                        <a href=\"index.php?partial=admin_settings\">Settings</a>
                                    </div>";
                        }
                    }
                ?>
        </div>