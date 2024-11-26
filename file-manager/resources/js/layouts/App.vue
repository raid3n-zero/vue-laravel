<template>
    <div class="p-2 w-full">
        <div class="w-[40px] h-[40px] float-left cursor-pointer pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5" d="m15 5l-6 7l6 7" />
            </svg>
        </div>
        <div class="pt-1 w-[calc(100%-80px)] float-left h-[40px]">
            <p class="text-center mt-1 font-semibold">File Manager</p>
        </div>
        <div class="pt-2 text-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0s.41-1.08 0-1.49zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14" />
            </svg>
        </div>
        <div class="clear-both"></div>
    </div>
    <router-view></router-view>
</template>

<script>
export default {

}
</script>