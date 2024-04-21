<!DOCTYPE html>
<html>

<head>
    <title>FORO INTERACTIVO</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>


<body>
    <style>
    header {
            background-color: #c7dce0e5;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            height: 20%;
            z-index: 1000;
        }

        .cajaHeader {
            width: 940px;
            margin: 0 auto; 
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        nav li {
            display: inline;
            margin: 0 15px;
        }

        nav a {
            text-transform: uppercase;
            color: #000000;
            font-weight: bold;
            font-size: 28px; 
            text-decoration: none;
        }

        nav a:hover {
            color: rgb(69, 66, 218);
            text-decoration: underline;
        }

        .comment-form-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 10px;
            border-radius: 20px;
            margin-top: 80px; 
        }

        .container {
            margin-top: 50px; 
        }

        .panel-footer {
            margin-top: 50px; 
        }
    </Style>
<header>
    <h1><img src="Saborescolombia.png" alt="logo de SaboresColombia"></h1>
    <div class="cajaHeader">
      <nav>
        <ul>
          <li><a href="../SABORES COLOMBIA/pantallaInicio.php">Inicio</a></li>
          <li><a href="../SABORES COLOMBIA/index.php">INGREDIENTES</a></li>
          <li><a href="../SABORES COLOMBIA/recetasInternacionales.php">RECETAS INTERNACIONALES</a></li>
          <li><a href="../CAJA COMENTARIOS/index2.php">Foro</a></li>
          <li><a href="../index.php" class="btn-1">LOGIN</a></li>
          <li><a href ="../bienvenida.php">Cerrar sesión</a><li>
        </ul>
      </nav>
    </div>
  </header>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-body">
                    <div class="comment-form-container">
                        <center><h3>FORO INTERACTIVO</h3></center>
                        <form id="frm-comment">
                            <div class="input-row">
                                <input type="hidden" name="comentario_id" id="commentId" placeholder="Name" /> <input class="input-field" type="text" name="name" id="name" placeholder="Nombres" />
                            </div>
                            <div class="input-row">
                                <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Agregar comentario">  </textarea>
                            </div>
                            <div>
                                <input type="button" class="btn-submit" id="submitButton" value="Publicar Ahora" />
                                <div id="comment-message">Comentario ha sido agregado exitosamente!</div>
                            </div>
                            <div style="clear:both"></div>
                        </form>
                    </div>
                    <div id="output"></div>
                    <script>
                        var totalLikes = 0;
                        var totalUnlikes = 0;

                        function postReply(commentId) {
                            $('#commentId').val(commentId);
                            $("#name").focus();
                        }

                        $("#submitButton").click(function() {
                            $("#comment-message").css('display', 'none');
                            var str = $("#frm-comment").serialize();

                            $.ajax({
                                url: "AgregarComentario.php",
                                data: str,
                                type: 'post',
                                success: function(response) {
                                    var result = eval('(' + response + ')');
                                    if (response) {
                                        $("#comment-message").css('display', 'inline-block');
                                        $("#name").val("");
                                        $("#comment").val("");
                                        $("#commentId").val("");
                                        listComment();
                                    } else {
                                        alert("Failed to add comments !");
                                        return false;
                                    }
                                }
                            });
                        });

                        $(document).ready(function() {
                            listComment();
                        });

                        function listComment() {
                            $.post("ListaDeComentarios.php",
                                function(data) {
                                    var data = JSON.parse(data);

                                    var comments = "";
                                    var replies = "";
                                    var item = "";
                                    var parent = -1;
                                    var results = new Array();

                                    var list = $("<ul class='outer-comment'>");
                                    var item = $("<li>").html(comments);

                                    for (var i = 0;
                                        (i < data.length); i++) {
                                        var commentId = data[i]['comentario_id'];
                                        parent = data[i]['parent_comentario_id'];

                                        var obj = getLikesUnlikes(commentId);

                                        if (parent == "0") {
                                            if (data[i]['like_unlike'] >= 1) {
                                                like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                                like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                                            } else {
                                                like_icon = "<img style='display:none;' src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                                like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                            }

                                            comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>De</span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + commentId + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'>\ " + like_icon + "&nbsp;\
                                                <span id='likes_" + commentId + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                                            var item = $("<li>").html(comments);
                                            list.append(item);
                                            var reply_list = $('<ul>');
                                            item.append(reply_list);
                                            listReplies(commentId, data, reply_list);
                                        }
                                    }
                                    $("#output").html(list);
                                });
                        }

                        function listReplies(commentId, data, list) {

                            for (var i = 0;
                                (i < data.length); i++) {

                                var obj = getLikesUnlikes(data[i].comentario_id);
                                if (commentId == data[i].parent_comentario_id) {
                                    if (data[i]['like_unlike'] >= 1) {
                                        like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                    } else {
                                        like_icon = "<img style='display:none;' src='img/NoMeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                    }
                                    var comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>De </span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + data[i]['comentario_id'] + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'> " + like_icon + "&nbsp;\
                                                <span id='likes_" + data[i]['comentario_id'] + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                                    var item = $("<li>").html(comments);
                                    var reply_list = $('<ul>');
                                    list.append(item);
                                    item.append(reply_list);
                                    listReplies(data[i].comentario_id, data, reply_list);
                                }
                            }
                        }

                        function getLikesUnlikes(commentId) {

                            $.ajax({
                                type: 'POST',
                                async: false,
                                url: 'Envio_MeGusta.php',
                                data: {
                                    comentario_id: commentId
                                },
                                success: function(data) {
                                    totalLikes = data;
                                }

                            });

                        }


                        function likeOrDislike(comentario_id, like_unlike) {

                            $.ajax({
                                url: 'MeGusta_NoMeGusta.php',
                                async: false,
                                type: 'post',
                                data: {
                                    comentario_id: comentario_id,
                                    like_unlike: like_unlike
                                },
                                dataType: 'json',
                                success: function(data) {

                                    $("#likes_" + comentario_id).text(data + " likes");

                                    if (like_unlike == 1) {
                                        $("#like_" + comentario_id).css("display", "none");
                                        $("#unlike_" + comentario_id).show();
                                    }

                                    if (like_unlike == -1) {
                                        $("#unlike_" + comentario_id).css("display", "none");
                                        $("#like_" + comentario_id).show();
                                    }

                                },
                                error: function(data) {
                                    alert("error : " + JSON.stringify(data));
                                }
                            });
                        }
                    </script>

                    <!--Fin elementos contenedor-->
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="container">
            <p>Para más desarrollos <a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript" target="_blank">ConfiguroWeb</a></p>
        </div>
    </div>

</body>

</html>