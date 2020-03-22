<template>
<div>
    <div v-for="message in this.messages">
        <div :class="[message.user_id == 1 ? 'justify-end pt-4 pr-4 pl-10' : 'justify-start pt-4 pl-4 pr-10']" class="flex">
            <div class="flex flex-col">
                <div :class="[message.user == 1 ? 'bg-gray-200' : 'bg-teal-200']" class="text-gray-900 px-3 py-2 rounded shadow-lg">
                    {{ message.body }}
                </div>
                <div class="text-xs text-gray-300">Verstuurd om: <span class="text-sm">15:00</span>
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
                messages: []
            }
        },

        mounted() {
            axios.get('messages').then(response => {
                this.messages = response.data;
            })
        },
    }
</script>
