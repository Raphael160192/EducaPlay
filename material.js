function menuToggle() {

    let menuArea = document.getElementById("menu-area")

    if (menuArea.classList.contains('menu-aberto') == true) {
        menuArea.classList.remove('menu-aberto')
    } else {
        menuArea.classList.add('menu-aberto')
    }

}



function limpar() {
    document.getElementById('titulo')
        .classList.remove('azul')
    document.getElementById('titulo')
        .classList.remove('vermelho')
    document.getElementById('titulo')
        .classList.remove('verde')
}



function azul() {
    limpar()
    document.getElementById('titulo')
        .classList.add('azul')
        document.getElementById('tituloMateria').innerHTML = 'Geografia - A Geografia é uma ciência que tem por objetivo o estudo da superfície terrestre e a distribuição espacial de fenômenos significativos na paisagem. Também estuda a relação recíproca entre o homem e o meio ambiente (Geografia Humana). Para alguns a Geografia também pode ser uma prática humana de conhecer onde se vive para compreender e planejar o espaço onde se vive. Um dos temas centrais da geografia é a relação homem-natureza. A natureza é entendida aqui como as forças que geraram ou contribuem para moldar o espaço geográfico, isto é, a dinâmica e interações que existem entre a atmosfera, litosfera, hidrosfera e biosfera. O homem é entendido como um organismo capaz de modificar consideravelmente as forças da natureza através da tecnologia'

}



function vermelho() {
    limpar()
    document.getElementById('titulo')
        .classList.add('vermelho')
        document.getElementById('tituloMateria').innerHTML = 'Língua Portuguesa - A língua portuguesa, também designada português, é uma língua românica flexiva ocidental originada no galego-português falado no Reino da Galiza e no norte de Portugal. Com a criação do Reino de Portugal em 1139 e a expansão para o sul na sequência da Reconquista deu-se a difusão da língua pelas terras conquistadas e mais tarde, com as descobertas portuguesas, para o Brasil, África e outras partes do mundo.[3] O português foi usado, naquela época, não somente nas cidades conquistadas pelos portugueses, mas também por muitos governantes locais nos seus contatos com outros estrangeiros poderosos. Especialmente nessa altura a língua portuguesa também influenciou várias línguas.'
}

function verde() {
    limpar()
    document.getElementById('titulo')
        .classList.add('verde')
        document.getElementById('tituloMateria').innerHTML = 'Matemática - A matemática (dos termos gregos μάθημα, transliterado máthēma, ciência, conhecimento ou aprendizagem e transliterado mathēmatikós, inclinado a aprender) é a ciência do raciocínio lógico e abstrato, que estuda quantidades, medidas, espaços, estruturas, variações e estatísticas. Um trabalho matemático consiste em procurar por padrões, formular conjecturas e, por meio de deduções rigorosas a partir de axiomas e definições, estabelecer novos resultados. A matemática desenvolveu-se principalmente na Mesopotâmia, no Egito, na Grécia, na Índia e no Oriente Médio. A partir da Renascença, o desenvolvimento da matemática intensificou-se na Europa, quando novas descobertas científicas levaram a um crescimento acelerado que dura até os dias de hoje.'
}


