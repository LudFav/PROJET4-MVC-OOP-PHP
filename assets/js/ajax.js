
//  AJAX FRONT
function billetAccueil(){ 
    let url_string = window.location.href;
    let url = new URL(url_string);
    page = url.searchParams.get("page");
   $.post({
       url: 'accueil',
       data:{'action': 'showAccueilBillet', 'page': page},
       success: function(data){
           billetsAccueil = $(data);
           $('#billetAccueil').html(billetsAccueil);
           }
       }) 
} 

function pagination(){
    $.post({
        url: 'accueil',
        data:{'action': 'paginationAccueil', 'page': page},
        success: function(data){
           let pagination = $(data);
           $('#paginationAccueil').html(pagination);
        }
    })
}
        
function showComment(){
        var idBillet = $('.post-info').attr('value');
        $.post({
            url: 'post',
            data:{'billetId': idBillet, 'action': 'showComment'},
            success: function(data){
                if(!$.trim(data)){
                    $('#showComments').text('Soyez la première personne à écrire un commentaire sur ce billet.'); 
                    $('#showComments').attr('style','font-style:italic; margin-bottom:15px;');       
                } else{
                    let newCommentDisplay= $(data);
                    newButtonSignal = newCommentDisplay.find('.signalbtn');
                    newButtonSignal.on('click', function(){
                        id= $(this).attr('value');
                        signalement(id);
                    });
                    $('#showComments').html(newCommentDisplay);
                }
            }
        })
    }
    //FORMULAIRE D'ENVOI DE COMMENTAIRE
    $('.submit-btn').on('click', function(e){
        e.preventDefault();
        if($('#formCommentaire')[0].checkValidity()){
            var idBillet = $('.post-info').attr('value');
            var auteur = $('#auteur').val();
            var contenu = $('#contenu').val();
            $.post({
                url:'post',
                data:{'action': 'insertCom',
                      'auteur': auteur,
                      'contenu': contenu,
                      'billetId': idBillet},
                success:function(data){
                    $('#formCommentaire')[0].reset(); 
                    showComment();
                }
            })   
        }
    })

function signalement(id){
    $.post({
         url: 'post',
         data: {'action': 'signalCom', 'idSignal' : id },
         success: function(data){
            showComment();
        }
    });
}  
    //BOUTON SIGNALER
    

$(window).bind('load', function(){   

    $('.signalbtn').on('click', function(){
        signalement($(this).attr('value'));
    });
     let login = new Modal(document.querySelector('body'), {
        id: 'connexion',
        titre: 'Connexion',
        type: 'connexion',
        pseudonyme: '',
        motDePasse: '',
        confirmation: 'Veuillez rentrer vos identifiants'
     });
        $('#login').on('click', function(){
         login;
      });
      let user = localStorage.getItem("name"); 
      $('#username').val(user);
      
        $('#connexion-validBtn').on('click', function(){
            var username = $('#username').val();
            var password = $('#password').val();
            $.post({
                url: 'login',
                data: {'action': 'login', 'username': username, 'password': password},
                success: function(data){
                window.location.href = data;
                }
            });  
        })
        
}) 

billetAccueil()
pagination();
showComment();

