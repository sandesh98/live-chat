<template>
    <div>
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
</template>

<script>
    import {eventBus} from '../events/event-bus';

    export default {
        data() {
            return {
                body: ''
            }
        },

        methods: {
            send() {
                axios.post('/messages', {
                    body: this.body
                }).then(response => {
                    // console.log(response);
                });

                this.body = '';

                eventBus.$emit('get-messages');
            }
        }
    }
</script>
