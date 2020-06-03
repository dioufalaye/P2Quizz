alert("fou");
console.log("azfeghj");
$(document).ready(function()
{   alert("ok");
    console.log("ok");
    $ ( '#creatAccount').click(function()
    {
        $.ajax({
            type:"POST",
            URL:"traitement/validerInscription.php",
            data=
            {
                 userlogin = $ ( '#plogin' ) . val () ,
                 pwd = $ ( '#pwd' ) . val () ,
                 pwd = $ ( '#pwd' ) . val () ,
                 pwdConfirm = $ ( '#pwdConfirm' ) . val () ,
                 prenom = $ ( '#prenom' ) . val () ,
                 nom = $ ( '#nom' ) . val () ,
                 avatar = $ ( '#avatar' ) . val () 
    
            }
        });
        window.location.replace(../../../indexe.php)

    });
    

});
/*
$ ( fonction () {
     
    / * Bouton d'édition ajax appel * /
    $ ( '#creatAccount') . on ( 'click' , function () { 
        
        var login = $ ( '#plogin' ) . val () ;
        var pwd = $ ( '#pwd' ) . val () ;
        var pwd = $ ( '#pwd' ) . val () ;
        var pwdConfirm = $ ( '#pwdConfirm' ) . val () ;
        var prenom = $ ( '#prenom' ) . val () ;
        var nom = $ ( '#nom' ) . val () ;
        var avatar = $ ( '#avatar' ) . val () ;
        
    })
}*/