<template>
    <div>
        <a href="#" class="flex items-center py-3 px-6 border-gray-900 border-b-2" v-for="friend in this.friends">
            <img class="h-12 w-12 rounded-full border-white border"
                 :src="friend.image"
                 alt="">
            <div class="group flex flex-col ml-3">
                <p class="text-lg text-white font-bold group-hover:text-gray-400">{{ friend.name }}</p>
                <div class="text-gray-300 text-sm italic group-hover:text-gray-400">Doen met
                    wat?
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                friends: []
            }
        },

        mounted() {
            axios.get('/friends').then(response => {
                this.friends = response.data;
            })
        },
    }
</script>
