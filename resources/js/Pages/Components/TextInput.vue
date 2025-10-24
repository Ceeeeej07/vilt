<script setup>
const model = defineModel({
    type: String,
    required: true,
});

defineProps({
    name: { type: String, required: true },
    type: { type: String, default: "text" },
    message: String,
});
</script>

<template>
    <div class="flex flex-col gap-4 w-full mt-4">
        <label class="font-bold">{{ name }}</label>
        <input
            v-model="model"
            class="rounded-2xl border bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200"
            :class="[
                message
                    ? 'border-red-500'
                    : 'border-gray-300 focus:border-black focus:ring-2 focus:ring-black',
            ]"
            :type="text"
            required
            placeholder="Name"
        />
        <small class="text-red-600" v-if="message">{{ message }}</small>
    </div>
</template>
