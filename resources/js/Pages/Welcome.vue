<script setup>
import LandingLayout from '@/Layouts/LandingLayout.vue';
import Stats from '@/Components/Marketing/Stats.vue';
import Carousel from '@/Components/Carousel/Carousel.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <LandingLayout>
    <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen border-b-2 border-gray-800">
      <Head title="Home" />
      <div class="container px-4 sm:px-6 lg:px-8 mx-auto py-10 min-h-screen flex items-center">
        <div class="flex flex-col md:flex-row w-full">
          <div class="text-white flex items-center mt-14 md:mt-0 md:w-3/5">
            <Transition name="slide-fade" appear>
              <div class="flex flex-col justify-center md:w-4/5">
                <h1 class="text-5xl md:text-6xl lg:text-8xl">Your workout, <br>reimagined</h1>
                <p class="dark:text-gray-400 my-5 text-xl">Our landing page template works on all
                  devices, so you only have to set it up once, and get beautiful results forever.</p>
                <form action="#">
                  <div class="flex md:w-4/5 md:w-full">
                    <input class="bg-slate-800 md:w-80 py-3 focus:outline-0 rounded border-2 focus:border-primary" type="text"
                           placeholder="your email">
                    <button class="bg-primary mx-3 px-8 w-52 rounded">Request access</button>
                  </div>
                </form>
                <ul class="mt-10">
                  <li class="my-3">
                    <div class="flex">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"
                           class="text-primary w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                      </svg>
                        <span class="text-gray-400 text-xl">
                           Easy workout tracking
                        </span>
                    </div>
                  </li>
                  <li class="my-3">
                    <div class="flex">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"
                           class="text-primary w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                      </svg>
                      <span class="text-gray-400 text-xl">
                                                    Detailed statistics
                                                </span>
                    </div>
                  </li>
                  <li class="my-3">
                    <div class="flex">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"
                           class="text-primary w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                      </svg>
                      <span class="text-gray-400 text-xl">
                                                    No hidden fees
                                                </span>
                    </div>
                  </li>
                </ul>
              </div>
            </Transition>
          </div>
          <Transition name="slide-fade-up" appear>
            <div class="text-white md:w-2/5">
              <img class="md:scale-75 mt-10 md:mt-0 rounded" src="../../images/workout2.jpg" alt="workout">
            </div>
          </Transition>
        </div>
      </div>
      <Stats/>
    </section>
    <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen border-b-2 border-gray-800">
      <Carousel/>
    </section>
  </LandingLayout>
</template>

<script>

export default {
  data() {
    return {
      show: false
    }
  },
}

</script>

<style>

.slide-fade-enter-active {
  transition: all 0.8s ease-in-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateY(-25px);
  opacity: 0;
}

.slide-fade-up-enter-active {
  transition: all 0.8s ease-in-out;
}

.slide-fade-up-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-up-enter-from,
.slide-fade-up-leave-to {
  transform: translateY(25px);
  opacity: 0;
}
</style>
