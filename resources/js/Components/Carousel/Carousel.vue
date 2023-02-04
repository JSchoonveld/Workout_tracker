<template>
    <div class="container mx-auto py-10 flex flex-col justify-center items-center">
        <h2 class="text-white font-bold text-5xl py-10 text-center w-2/3">From rough design files, to powerful products</h2>
        <p class="w-1/2 pb-14 text-xl text-center pt-5 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea magni molestiae obcaecati odit placeat repudiandae tempora! Delectus dolores, laudantium nemo porro rem repudiandae veniam?</p>
        <swiper-container slides-per-view="3" speed="500" loop="true" css-mode="true">
            <swiper-slide>
                <img class="slide-image px-2"
                     src="https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2021-12/211208-working-out-stock-mn-1310-55e1c7.jpg"
                     alt="running">
            </swiper-slide>
            <swiper-slide>
                <img class="slide-image px-2"
                     src="https://phantom-marca.unidadeditorial.es/746e69f29df0fa7da1f9df1cffc2af10/crop/0x20/1499x861/resize/1320/f/jpg/assets/multimedia/imagenes/2022/01/12/16419960151339.jpg"
                     alt="Man working out">
            </swiper-slide>
            <swiper-slide>
                <img class="slide-image px-2"
                     src="https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2021-12/211208-working-out-stock-mn-1310-55e1c7.jpg"
                     alt="running">
            </swiper-slide>
        </swiper-container>
    </div>
</template>

<style scoped>
.slide-image {
height: 500px;
    width: 100%;
    object-fit: cover;
}
</style>

<script>

</script>
