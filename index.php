<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'trabalhista':
            include_once 'paginas/include/headerLandingT.php';
            include_once 'paginas/trabalhista/trabalhista.php';
            include_once 'paginas/include/nossoCompromisso.php';
            include_once 'paginas/trabalhista/respostasTrabalhista.php';
            include_once 'paginas/trabalhista/servicosTrabalhista.php';
            include_once 'paginas/trabalhista/contatoTrabalhista.php';
            include_once 'paginas/include/footer.php';
            break;

        case 'trabalhista2':
            include_once 'paginas/include/headerLandingT2.php';
            include_once 'paginas/trabalhista2/trabalhista.php';
            include_once 'paginas/include/nossoCompromisso.php';
            include_once 'paginas/trabalhista2/respostasTrabalhista.php';
            include_once 'paginas/trabalhista2/servicosTrabalhista.php';
            include_once 'paginas/trabalhista2/contatoTrabalhista.php';
            include_once 'paginas/include/footer2.php';
            break;

        case 'previdenciario':
            include_once 'paginas/include/headerLandingP.php';
            include_once 'paginas/previdenciario/previdenciario.php';
            include_once 'paginas/include/nossoCompromisso.php';
            include_once 'paginas/previdenciario/respostasPrevidenciario.php';
            include_once 'paginas/previdenciario/servicosPrevidenciario.php';
            include_once 'paginas/previdenciario/contatoPrevidenciario.php';
            include_once 'paginas/include/footer.php';
            break;


        case 'institucional':
            include_once 'paginas/include/headerInstitucional.php';
            include_once 'paginas/include/footer.php';
            break;
            
        case 'DraMCavalcanti':
            include_once 'paginas/linkbioM/linkbio-m.php';
            break;

        case 'linkBioLeandro':
            include_once 'paginas/include/headerBioLeandro.php';
            include_once 'paginas/linkBio/linkBioLeandro.php';
            include_once 'paginas/include/footer.php';
            break;

        case 'linkBioEscritorio':
            include_once 'paginas/include/headerBioEscritorio.php';
            include_once 'paginas/linkBio/linkBioEscritorio.php';
            include_once 'paginas/include/footer.php';
            break;

    
        
            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
        include_once 'paginas/include/paginafacil.php';
        break;
    }
} else {
    //não existe   
    // include_once 'paginas/include/paginafacil.php';
    include_once 'paginas/linkbioM/linkbio-m.php';
}
