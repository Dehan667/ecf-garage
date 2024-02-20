$("form").on( "submit", function( event ) {
    if ($('#agent_edit_pwd_plainPassword').val() != $('#verify_pass').val()) {
        alert('Les deux mots de passes renseignés sont différents');
        event.preventDefault();
    }
});
