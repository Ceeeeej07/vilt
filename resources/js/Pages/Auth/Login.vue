<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const loginForm = useForm({
    email: "",
    password: "",
    remember: null,
});

const submit = () => {
    loginForm.post("/login", {
        onError: () => {
            loginForm.reset("password", "remember");
        },
    });
};
</script>

<template>
    <Head title="Login | " />
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

                <div class="flex items-center mt-4">
                    <input
                        v-model="loginForm.remember"
                        id="remember"
                        type="checkbox"
                        class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                    />
                    <label
                        for="remember"
                        class="ml-2 block text-sm text-gray-900"
                    >
                        Remember me
                    </label>
                </div>

                <button
                    @click.prevent="submit"
                    class="disabled:opacity-50 mt-6 w-full bg-green-800 text-white font-bold py-3 px-6 rounded-2xl hover:bg-green-900 transition duration-200"
                    :disabled="loginForm.processing"
                >
                    Login
                </button>
                <p class="mt-4 text-center text-sm text-gray-600">
                    Need an account?
                    <!-- //must change this link if i have login file -->
                    <Link
                        :href="route('register')"
                        class="text-green-800 font-bold hover:underline"
                    >
                        Register
                    </Link>
                </p>
            </form>
        </div>
    </div>
</template>
