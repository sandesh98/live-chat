<template>
    <div>
        <div class="flex flex-col min-h-screen">
            <div class="flex">
                <div class="flex-none w-64 bg-gray-900 text-white">
                    <div class="flex items-center p-6">
                        <img class="h-16 w-16 rounded-full border-white border" src="https://i.pinimg.com/280x280_RS/7c/64/22/7c64224f45f745dd0cdd6fa442904ff8.jpg" alt="">
                        <div class="text-white font-bold tracking-tight text-2xl uppercase pl-5">{{ name }}</div>
                    </div>
                </div>
                <div class="flex-1 bg-gray-900">
                    <div class="flex items-center h-full pl-3">
                        <div class="pr-2">
                            <img class="h-12 w-12 rounded-full shadow-2xl" src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/57056206_2930863426923875_2141733468474703872_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=uvhElWTD0P4AX_JOYiS&_nc_ht=scontent-amt2-1.xx&oh=1a56a80dfb3f55bebc5639ab119f99f5&oe=5E99683A" alt="">
                        </div>
                        <div>
                            <div class="text-white font-bold text-lg">Marzinna</div>
                            <div class="text-green-400 italic text-sm">Online</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 bg-gray-700">
                <div class="flex flex-col justify-between">
                    <div class="flex-none w-64 bg-gray-800 px-6">
                        <a href="#" class="flex items-center py-3" v-for="i in 3">
                            <img class="h-12 w-12 rounded-full border-white border" src="https://avatars2.githubusercontent.com/u/24436681?s=460&u=c003b36c6d044120eab5be0bf4aa3c5a8e5c4101&v=4" alt="">
                            <div class="group flex flex-col ml-3">
                                <p class="text-lg text-white font-bold group-hover:text-gray-400">Sandesh</p>
                                <div class="text-gray-300 text-sm italic group-hover:text-gray-400">leuk man man bro...</div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-gray-800 border border-t-2 border-gray-900">
                        <div class="flex p-2 text-white">
                            <div class="border-r-2 border-gray-900 w-1/2 text-center">+</div>
                            <div class="w-1/2 text-center">Opties</div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-pink-500">Rest of the content</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: ''
            }
        },

        mounted() {
            axios.get('/api/user').then(response => {
                this.name = response.data.name;
            });
        }
    }
</script>


