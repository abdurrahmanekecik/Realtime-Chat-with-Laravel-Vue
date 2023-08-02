
<template>
    <div class="h-96 w-full">
        <div class="h-full p-2 flex flex-col-reverse overflow-scroll">
            <message-item v-for="message in messages" :key="message.id" :message="message" />
        </div>
    </div>
</template>

<script>
import MessageItem from "@/Pages/Chat/messageItem.vue";
export default {
    components: {MessageItem},
    props: ['messages']
}
</script>

<style scoped>

</style>
