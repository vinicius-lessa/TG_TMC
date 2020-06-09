// preparing language file
var aLangKeys=new Array();
aLangKeys['en']=new Array();
aLangKeys['fr']=new Array();
aLangKeys['en']['jogos']='JOGOS';
//aLangKeys['pt']['peoples']='Peoples >>';
//aLangKeys['pt']['all_list']='All list';
//aLangKeys['pt']['online']='Online';
//aLangKeys['pt']['articles']='Articles >>';
//aLangKeys['pt']['js']='JavaScript';
//aLangKeys['pt']['php']='PHP';
//aLangKeys['pt']['html']='HTML';
//aLangKeys['pt']['css']='CSS';
//aLangKeys['pt']['contact_us']='Contact us';
//aLangKeys['pt']['welcome']='Welcome guests';
//aLangKeys['pt']['a_man']='A man bribes a rabbit with wicked dentures to run away with him in a sailboat via an ambulance. Bribing Koalas to remain illegally in one place. Trees anchor me in place. / Your mom drives the ambulance, but the city is farther than it appears.';

aLangKeys['fr']['jogos']='GAMES';
//aLangKeys['en']['peoples']='Peuples >>';
//aLangKeys['en']['all_list']='Toutes les listes';
//aLangKeys['en']['online']='En ligne';
//aLangKeys['en']['articles']='Articles >>';
//aLangKeys['en']['js']='JavaScript';
//aLangKeys['en']['php']='Php';
//aLangKeys['en']['html']='Html';
//aLangKeys['en']['css']='Css';
//aLangKeys['en']['contact_us']='Contactez nous';
//aLangKeys['en']['welcome']='Bienvenue aux invites';
//aLangKeys['en']['a_man']="Un homme soudoie un lapin avec des prothèses méchantes pour s'enfuir avec lui dans un voilier via une ambulance. Corruption des Koalas pour qu'ils restent illégalement à un endroit. Les arbres m'ancrent en place. / Votre mère conduit l'ambulance, mais la ville est plus loin qu'il n'y paraît.";
$(document).ready(function() {
// onclick behavior
    $('.lang').click( function() {
        var lang = $(this).attr('id'); // obtain language id
            // translate all translatable elements
            $('.tr').each(function(i){
                $(this).text(aLangKeys[lang][ $(this).attr('key') ]);
            });
    } );
});