<script>
export default {
    name: 'Bio'
}
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center">Biografia</h1>
        <p> Musicista e compositore napoletano, classe 1990, inizia ad approcciare alla musica all’età di 11 anni
            studiando il flauto traverso, successivamente inizia lo studio della chitarra, approfondendola nel jazz
            per
            poi
            diplomarsi al conservatorio di Napoli S. Pietro a Majella in violino classico, sotto la guida del M°
            Antonio
            Colica.
            Il primo approccio al violino è avvenuto grazie all’incontro con il rumeno Illie Pipica, che lo ha
            spinto ad
            incuriosirsi ed appassionarsi ai vari linguaggi dell’est Europa, mantenendo sempre vivo lo studio della
            musica
            classica.
            Durante i suoi studi classici continua a dedicarsi lo studio del jazz, frequentando la MAD SCHOOL e
            girando
            l’Europa
            seguendo diversi stage per violino jazz, primo fra tutti lo stage con il violinista Didier Lockwood al
            CMDL
            (Centre
            des musiques Didier Lockwood).<br>
            -Nel 2016 con gli Araputo zen pubblicano il loro primo disco “Hydruntum” <br>
            -Nel 2021 sempre con Araputo zen esce il secondo Album “Majacosajusta” <br>
            Attualmente sta Lavorando al suo disco “Miradöis”. <br>
            BAND: <span>Araputo Zen</span> <br>
            Zygrya sting trio</p>

        <div class="img d-flex  justify-content-center">
            <img src="../assets/araputi.jpg" alt="">
        </div>

    </div>
</template>

<style lang="scss" scoped>
p {
    text-align: center;
    color: white;
    font-size: 20px;
    margin: 40px;
}

.container-fluid {
    height: 100vh;
}

span {
    font-weight: bold;
    color: burlywood;
}

h1 {
    padding-top: 20px;
    color: white;
}

img {
    max-width: 100%;
    width: 500px;
    margin-bottom: 70px;
}

@media only screen and (max-width: 767px) {
    img {
        width: 100%;
        /* Larghezza massima del 100% quando la larghezza del dispositivo è inferiore a 767px */
    }
}
</style>