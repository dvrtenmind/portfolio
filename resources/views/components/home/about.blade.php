<!-- ====== About Section Start -->
<section id="about" class="dark:bg-purple_bg pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-800 italic py-2 px-3 border-l-4 border-green_dvr">
                 "Everything is achievable with hard work"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base text-gray-800 mb-8">
            I started my career in programming in 2017 when I joined the technical IT course at ETEC,
             and in 2022 I started working professionally in the area, developing automations and
             scripts in Python to increase productivity and performance in the service
             I worked in, in addition to developing some tools to internal use in
             <span class="text-green_dvr font-bold">Laravel, mySql and Python.</span>
          </p>
          <p class="text-base text-gray-800 mb-8">
            Approximately a year later I was assigned to take care of the company's entire
            data and network infrastructure, where I had my first contact with
            <span class="text-green_dvr font-bold">server management</span>
            and fell in love with the area.
          </p>
          <p class="text-base text-gray-800 mb-8">
            I also currently maintain some personal projects that I intend to make open-source
             available in the future.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
