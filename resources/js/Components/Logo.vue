<template>
  <div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-6">
      Full Logo
    </h1>

    <div>
      <picture
        style="height: 382px"
        class="block shadow flex items-center justify-center mb-6 rounded-lg"
      >
        <img src="/images/logo.svg" alt="logo" />
      </picture>

      <div class="flex justify-between items-center">
        <p>Original logo on <strong>white</strong> background</p>

        <a
          href="/images/logo.svg"
          class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
          >logo.svg</a
        >
      </div>

      <div>
        <picture
          style="height: 382px"
          class="block shadow flex items-center justify-center mb-6 bg-blue rounded-lg my-10"
        >
          <img src="/images/negative-logo.svg" alt="logo" />
        </picture>

        <div class="flex justify-between items-center">
          <p>Negative logo on <strong>dark</strong> background</p>

          <a
            href="/images/negative-logo.svg"
            class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
            >negative-logo.svg</a
          >
        </div>

      </div>

            <div>
        <picture
          style="height: 382px"
          class="block shadow flex items-center justify-center mb-6 bg-black rounded-lg my-10"
        >
          <img src="/images/pure-negative-logo.svg" alt="logo" />
        </picture>

        <div class="flex justify-between items-center">
          <p>Negative logo on <strong>dark</strong> background</p>

          <a
            href="/images/pure-negative-logo.svg"
            class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
            >pure-negative-logo.svg</a
          >
        </div>

      </div>


    </div>
  </div>
</template>

<script>
export default {};
</script>
