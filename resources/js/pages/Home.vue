<script>
export default {
    name: "Home",
};
</script>

<template>
    <main>
        <div class="container-fluid">
            <h1 class="text-center p-3"> </h1>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../js/assets/me.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="../../js/assets/Pumiliani-49.JPG" class=" grey d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="../assets/Pumiliani-33.JPG" class="grey d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/notte.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
</template>
  
<style lang="scss" scoped>
.container-fluid {
    background-color: black;
    color: white;
    height: 100vh;
}

.grey {
    filter: grayscale(100%);
}

img {
    width: 100%;
    max-height: 700px;
    object-fit: cover;
}

.carousel {
    width: 70%;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
}

a {
    color: white;
}

.gruppo {
    max-width: 100%;
    height: auto;
}

.sub-img {
    padding: 20px;
    margin: 0 auto;
    max-width: 600px;
}

@media (max-width: 767px) {
    .carousel {
        width: 100%;
    }
}
</style>
  