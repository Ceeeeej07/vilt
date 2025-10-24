<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const loginForm = useForm({
    email: "",
    password: "",
});

const submit = () => {
    loginForm.post("/login", {
        onError: () => {
            loginForm.reset("password");
        },
    });
};
</script>

<template>
    <Head title="Register | " />
    <div class="mt-10 bg-white flex flex-col items-center justify-center px-4">
        <h1 class="text-3xl font-bold underline">Login</h1>

        <div class="w-full max-w-md mt-6">
            <form @submit.prevent="submit">
                <TextInput
                    v-model="loginForm.email"
                    name="Email"
                    type="email"
                    :message="loginForm.errors.email"
                />
                <TextInput
                    v-model="loginForm.password"
                    name="Password"
                    type="password"
                    :message="loginForm.errors.password"
                />

                <button
                    @click.prevent="submit"
                    class="disabled:opacity-50 mt-6 w-full bg-green-800 text-white font-bold py-3 px-6 rounded-2xl hover:bg-green-900 transition duration-200"
                    :disabled="loginForm.processing"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</template>
