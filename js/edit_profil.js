function getQueryString(key, default_)
{
    if (default_==null)
        default_ = "";

    key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");

    var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
    var qs = regex.exec(window.location.href);

    if(qs == null) 
        return default_; 
    else 
        return qs[1];
}

var get = getQueryString("id");
console.log(get);
console.log('lol');

$(function()
{
    $('#edit_form').submit(function()
    {
        var url = $(this).attr("action");
        var firstname = $("#edit_firstname").val();
        var lastname = $("#edit_lastname").val();
        var email = $("#edit_email").val();
        var resum = $("#edit_resum").val();
        alert('lol');
        $.post(url,{firstname:firstname,lastname:lastname,email:email,resum:resum},function(data){
            console.log(data.erreur);
            if (data.erreur == "no")
            {
                alert ('lol')
            }
            else
            {
                alert('lol');
            }
        },"json");
        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    });
});
