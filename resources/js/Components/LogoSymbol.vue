<template>
  <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-6">
        Logo Symbol
        </h1>

        <div>
            <picture
                style="height: 382px"
                class="block shadow flex items-center justify-center mb-6 rounded-lg"
                >
                <img src="/images/symbol-original.svg" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Original symbol on <strong>white</strong> background</p>

                <a
                href="/images/symbol-original.svg"
                class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
                >symbol-original.svg
                </a>
            </div>
        </div>

        <div>
            <picture
                style="height: 382px"
                class="block shadow flex items-center justify-center mb-6 bg-blue rounded-lg my-10"
                >
                <img src="/images/symbol-negative.svg" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative symbol on <strong>dark</strong> background</p>

                <a
                    href="/images/symbol-negative.svg"
                    class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
                    >symbol-negative.svg</a
                >
            </div>
        </div>

        <div>
            <picture
            style="height: 382px"
            class="block shadow flex items-center justify-center mb-6 bg-black rounded-lg my-10"
            >
                <img src="/images/symbol-pure-negative.svg" alt="logo" />
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative symbol on <strong>dark</strong> background</p>

                <a
                    href="/images/symbol-pure-negative.svg"
                    class="border border-grey-light px-6 py-1 rounded-full text-black font-bold text-xs"
                    >symbol-pure-negative.svg</a
                >
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
