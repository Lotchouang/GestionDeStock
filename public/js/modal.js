$("input[type=radio][name=radioInline]").change(function() {
    if($(this).val() == 'payer') {
        alert('change !');
        document.getElementById(s_payer).style.display = block;
        document.getElementById(s_credit).style.display = none;
        document.getElementById(s_livraison).style.display = none;
        $('input[id=tonchamptext]').removeAttr("readonly");
    }else if($(this).val() == 'credit') {
        document.getElementById(s_payer).style.display = none;
        document.getElementById(s_credit).style.display = block;
        document.getElementById(s_livraison).style.display = none;
    }else if($(this).val() == 'livraison'){
        document.getElementById(s_payer).style.display = none;
        document.getElementById(s_credit).style.display = none;
        document.getElementById(s_livraison).style.display = none;
    }
  });