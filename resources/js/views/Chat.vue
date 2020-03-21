<template>
    <div>
        <div class="flex flex-col h-screen min-h-screen">
            <div class="flex">
                <!-- Top right section / My personal information -->
                <div class="flex-none w-64 bg-gray-900 text-white">
                    <div class="flex items-center p-6">
                        <img class="h-16 w-16 rounded-full border-white border"
                             src="https://i.pinimg.com/280x280_RS/7c/64/22/7c64224f45f745dd0cdd6fa442904ff8.jpg" alt="">
                        <div class="text-white font-bold tracking-tight text-2xl uppercase pl-5">{{ name }}</div>
                    </div>
                </div>
                <!-- Rest of the navbar -->
                <div class="flex-1 bg-gray-900">
                    <div class="flex items-center h-full pl-3">
                        <div class="pr-2">
                            <img class="h-12 w-12 rounded-full shadow-2xl"
                                 src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/57056206_2930863426923875_2141733468474703872_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=uvhElWTD0P4AX_JOYiS&_nc_ht=scontent-amt2-1.xx&oh=1a56a80dfb3f55bebc5639ab119f99f5&oe=5E99683A"
                                 alt="">
                        </div>
                        <div>
                            <div class="text-white font-bold text-lg">Marzinna</div>
                            <div class="text-green-400 italic text-sm">Online</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 bg-gray-600 overflow-y-hidden">
                <!-- Sidebar kolom -->
                <div class="flex bg-gray-700 flex-none flex-col justify-between">

                    <div class="w-64 bg-gray-800 overflow-y-auto">
                        <a href="#" class="flex items-center py-3 px-6">
                            <img class="h-12 w-12 rounded-full border-white border"
                                 src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/57056206_2930863426923875_2141733468474703872_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=uvhElWTD0P4AX_JOYiS&_nc_ht=scontent-amt2-1.xx&oh=1a56a80dfb3f55bebc5639ab119f99f5&oe=5E99683A"
                                 alt="">
                            <div class="group flex flex-col ml-3">
                                <p class="text-lg text-white font-bold group-hover:text-gray-400">Marzinna</p>
                                <div class="text-gray-300 text-sm italic group-hover:text-gray-400">Doen met
                                    wat?
                                </div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center py-3 px-6 border-gray-900 border-t-2">
                            <img class="h-12 w-12 rounded-full border-white border"
                                 src="https://scontent-ams4-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160a/p160x160/68644706_915280908864616_3153487567089827840_o.jpg?_nc_cat=100&_nc_sid=dbb9e7&_nc_ohc=5y7VVhFezmIAX9A6vVH&_nc_ht=scontent-ams4-1.xx&oh=b9d42e065e07b20a70ddf67c5b440e4c&oe=5E9B7439"
                                 alt="">
                            <div class="group flex flex-col ml-3">
                                <p class="text-lg text-white font-bold group-hover:text-gray-400">
                                    &lt;body&gt;</p>
                                <div class="text-gray-300 text-sm italic group-hover:text-gray-400">Kijk die
                                    video
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="bg-gray-800 border border-t-2 border-gray-900">
                        <div class="flex p-2 text-white">
                            <div class="border-r-2 border-gray-900 w-1/2 text-center">+</div>
                            <a @click="logout"
                               class="w-1/2 text-center hover:bg-gray-700 hover:rounded hover:text-gray-400 cursor-pointer">Uitloggen</a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-1  flex-col justify-between">
                    <div class="overflow-y-auto">
                        <!-- Chatbericht verstuurd naar marzinna -->
                        <div class="flex justify-end pt-4 pr-4 pl-10">
                            <div class="flex flex-col">
                                <div class="text-gray-900 bg-gray-200 px-3 py-2 rounded shadow-lg">
                                    Ewa glitch, zou je Amanda doen?
                                </div>
                                <div class="text-xs text-gray-300">Verstuurd om: <span class="text-sm">15:00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Chatbericht ontvangen vanuit marzinna -->
                        <div class="flex justify-start pt-4 pl-4 pr-10">
                            <div class="flex flex-col">
                                <div class="text-gray-900 bg-teal-200 px-3 py-2 rounded shadow-lg">
                                    Doen met wat?
                                </div>
                                <div class="text-xs text-gray-300 justify-end">Ontvangen om: <span
                                    class="text-sm">15:00</span></div>
                            </div>
                        </div>

                        <!-- Chatbericht verstuurd naar marzinna -->
                        <div class="flex justify-end pt-4 pr-4 ml-10">
                            <div class="flex flex-col">
                                <div class="text-gray-900 bg-gray-200 px-3 py-2 rounded shadow-lg">
                                    Zak patat
                                </div>
                                <div class="text-xs text-gray-300">Verstuurd om: <span class="text-sm">15:00</span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="bg-gray-900 border border-t-2 border-gray-900">
                        <form action="">
                            <div class="mx-3 py-3">
                                <input
                                    v-on:keydown.enter.prevent="send"
                                    v-model="body"
                                    class="bg-gray-600 appearance-none rounded w-full py-2 px-4 text-white leading-tight focus:outline-none focus:border-gray-100"
                                    id="inline-full-name" type="text" placeholder="Type een bericht" autocomplete="off"
                                    autofocus>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                body: '',
                chat: {
                    messages: []
                }
            }
        },

        mounted() {
            axios.get('/api/user').then(response => {
                this.name = response.data.name;
            });

            axios.get('/api/messages').then(response => {
                this.chat.messages.push(response.data);
            });

            console.log(this.chat.messages)
        },

        methods: {
            logout() {
                console.log('logout');
                axios.post('/logout').then(response => {
                    this.$router.push('login')
                })
            },
            send() {
                // send message to server
                axios.post('/message', {
                    body: this.body
                }).then(response => {
                    console.log(response);
                });

                this.message = '';
            },
        }
    }
</script>


