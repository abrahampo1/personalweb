<?
    include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <!--  Styles  -->
    <link type="text/css" rel="stylesheet" href="./index.css">
        <link
    rel="stylesheet"
    href="https://unpkg.com/xp.css"
    >
    <title>Always is connected</title>
</head>
<body>
    <canvas style="width: 100%; height: 100%;"></canvas><!-- Matrix animation -->
    <br><br>
    <header>
        <div id="navbaruwu" class="drag bar-drag">
            <nav>
                <button class="homebtn">
                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.pngmart.com%2Ffiles%2F3%2FWindows-XP-PNG-Photos.png&f=1&nofb=1" alt="" srcset="">
                    <div class="start-text">Start</div>
                </button>
                <a class="tiny-icon" href="https://github.com/xenonxss">
                    <img src="http://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/d7e4e1e509c728d.png" alt="" srcset="">
                </a>
                <a class="tiny-icon" href="https://www.youtube.com/channel/UCE25-Jd9ci7dHVxJQS-EteQ">
                    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpixelartmaker.com%2Fart%2F044930b3e24e596.png&f=1&nofb=1" alt="" srcset="">
                </a>
            </nav>
        </div>
       
    </header>
    
    <div id="main-window" class="window" >
        <div id="window-header" class="title-bar" onmouseenter="dragElement(this)">
            <div class="tittle-bar-text" style="margin: 0px 0px 0px 10px;">Always is connected</div>
            <div class="title-bar-controls">
                <button aria-label="Help" onclick="help_show();"></button>
                <button aria-label="Close"></button>
              </div>
        </div>
        <div class="window-body">
            <section class="tabs" style="max-width: 99%">
                <menu role="tablist" aria-label="Sample Tabs">
                  <button role="tab" aria-selected="true" aria-controls="tab-A">Mood</button>
                  <button role="tab" aria-controls="tab-B" onclick="furry_show();">Furry art</button>
                </menu>
                <article role="tabpanel" id="tab-A">
                    <header>
                        <p>
                            Set your mood, I already know mine.
                            If you don't want to be doxed, don't dox me.
                        </p>
                    </header>
                    <section id="mood">
                        <fieldset>
                        <legend>Today's mood</legend>
                        <img class="Profile" src="/images/pic2.jpg" alt="Profile image :(">
                        <div class="field-row">
                            <input id="radio29" type="radio" name="fieldset-example2">
                            <label for="radio29">Playing any instrument</label>
                        </div>
                        <div class="field-row">
                            <input id="radio30" type="radio" name="fieldset-example2">
                            <label for="radio30">Having fun skating</label>
                        </div>
                        <div class="field-row">
                            <input id="radio31" type="radio" name="fieldset-example2">
                            <label for="radio31">Coding random things</label>
                        </div>
                        <div class="field-row">
                            <input id="radio32" type="radio" name="fieldset-example2">
                            <label for="radio32">Listening a hiphop track</label>
                        </div>
                        <div class="field-row">
                            <input id="radio33" type="radio" name="fieldset-example2">
                            <label for="radio33">Lost all stuff in deepwoken</label>
                        </div>
                        <div class="field-row">
                            <input id="radio34" type="radio" name="fieldset-example2">
                            <label for="radio34">Flex manabars with all my housemates</label>
                        </div>
                        <div class="field-row">
                            <input id="radio35" type="radio" name="fieldset-example2">
                            <label for="radio35">e</label>
                        </div>
                        <div class="field-row">
                            <input id="radio36" type="radio" name="fieldset-example2">
                            <label for="radio36">Being a bad boy</label>
                            </div>
                        </fieldset>
                </section>
                <ul id="lista" class="tree-view">
                    <summary>About me</summary>
                    <details open>
                        <summary>Me</summary>
                        <li>
                          <ul>
                            <li>17yo</li>
                            <li>Spain</li>
                            <li>Musician</li>
                            <div>Dev</div>
                          </ul>
                        </li>
                        <li>
                        <details open>
                            <summary>Programming languages</summary>
                            <ul>
                                <li>Python</li>
                                <li>HTML</li>
                                <ul>
                                    <li>(is not a language)</li>
                                </ul>
                                <li>Javascript</li>
                                <li>Css</li>
                                <li>
                                    <details open>
                                        <summary>Learning / wanna learn</summary>
                                        <ul>
                                            <li>C</li>
                                            <li>PHP</li>
                                            <li>Ruby</li>
                                        </ul>
                                    </details>
                                
                                </li>
                            </ul>
                        </details>
                        <details open>
                            <summary>Social Media</summary>
                            <ul>
                                <li><a href="https://www.instagram.com/xenonxss/">Instagram</a></li>
                                <li><a href="https://twitter.com/xenonxss">Twitter</a></li>
                                <li><a href="https://www.youtube.com/channel/UCE25-Jd9ci7dHVxJQS-EteQ">Youtube</a></li>
                                <li><a href="https://github.com/xenonxss">Github</a></li>
                                <li><a href="https://steamcommunity.com/id/xenon10/">Steam</a></li>
                            </ul>
                        </details>
                    </details>
                  </ul>
                    <footer>
                        <section class="field-row" style="width: 100%;">
                            <button style="width: 10%;" onclick="footer_boton('done');">OK</button>
                            <button style="width: 10%;" onclick="footer_boton('notsure');">I'M NOT SURE</button>
                            <button style="width: 17%;" onclick="footer_boton('anything');">I DON'T FEEL ANYTHING</button>
                            <label id="textouwu" style="margin-left: 15px;"></label>
                        </section>
                    </footer>
                </article>
        </div>
    </div>
    <div hidden id="window-help" class="window drag">
        <div id="window-header" class="title-bar" onmouseenter="dragElement(this)">
            <div class="title-bar-text">Help</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button aria-label="Close" onclick="help_close();"></button>
            </div>
        </div>
        <div class="window-body">
            <p>This is my own portal website</p>
            <p>Its purpose is to have a portal with all my social networks, with my personal design.</p>
        </div>
        <div class="status-bar">
            <p class="status-bar-field">Powered by xenonxss</p>
            <p class="status-bar-field">Slide 1</p>
            <p id="cpu-usage" class="status-bar-field">CPU Usage: 14%</p>
          </div>
    </div>
    <div hidden id="window-furry" class="window drag" style="width:auto">
        <div class="title-bar" onmouseenter="dragElement(this)">
            <div class="title-bar-text">Mmmmmmmmmmmmm <span id="deep" onclick="deep();">👀</span></div>
          <div class="title-bar-controls">
            <button aria-label="Close" onclick="furry_close();"></button>
          </div>
        </div>
        <div class="window-body">
            <img src="/gifs/rock-sus.gif" style="width: 100%;">
        </div>
    </div>
    <!-- A partir de aqui viene el shitpost-->
    <div hidden id="deep-window" class="window" style="width: 300px">
        <div class="title-bar" onmouseenter="dragElement(this)">
          <div class="title-bar-text deep-title">You better exit...</div>
          <div class="title-bar-controls">
            <button aria-label="Close" onclick="youcant();"></button>
          </div>
        </div>
        <div class="window-body">
            <header>
                <p>Maybe here...</p>
                </br>
            </header>
            <section>
                <fieldset>
                    <legend>My Tor favorite sites</legend>
                    <p class="onion-links">
                        <p>
                            <span>zkwz3ndayqujghohyaqjit6yfvtt5ussz7d4yhvbgfm4avmdsm433myd.onion (Forum)</span>
                        </p>
                        <p>
                            picochanwvqfa2xsrfzlul4x4aqtog2eljll5qnj5iagpbhx2vmfqnid.onion (Forum)
                        </p>
                        <p>
                            http://libraryfyuybp7oyidyya3ah5xvwgyx6weauoini7zyz555litmmumad.onion (Books)
                        </p>           
                    </p>
                    <img class="tor-img" src="/images/Tor_logo1.png">
                </fieldset>
                <ul class="tree-view final-text">
                    <li>You can put</li>
                    <li><strong style="color: purple">✨ Whatever you want ✨</strong></li>
                    <hr>
                    <br>
                    <?php 
                        $sql = 'SELECT `user`, `comentario` FROM `blog_comentarios`';
                        $do = mysqli_query($link, $sql);

                        while ($comentarios = mysqli_fetch_assoc($do)){
                            echo('<p>'.$comentarios['user'].' says:'. $comentarios['comentario'].'</p>');
                        }

                    ?>
                </ul>
                <form action="api.php" method="post" class="form-msg">
                    <div class="field-row name">
                        <label for="text21">Name (Default: Anonymous)</label>
                        <input id="text21" name="user" type="text"/>
                      </div>
                    <div class="field-row-stacked" style="width: 200px">
                        <label for="text24"></label>
                        <textarea id="text24" rows="8" class="textarea" name="comment"></textarea>
                    </div>
                    <select name="valoracion">
                        <option>5 - Incredible!</option>
                        <option>4 - Great!</option>
                        <option>3 - Pretty good</option>
                        <option>2 - Not so great</option>
                        <option>1 - Oof</option>
                    </select>
                    <button class="post-boton">POST</button>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/js/index.js"></script>
