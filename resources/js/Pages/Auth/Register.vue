<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const registerForm = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    registerForm.post("/register", {
        onError: () => {
            registerForm.reset("password", "password_confirmation");
        },
    });
};
</script>

<template>
    <Head title="Register | " />
    <div class="mt-10 bg-white flex flex-col items-center justify-center px-4">
        <h1 class="text-3xl font-bold underline">Register</h1>

        <div class="w-full max-w-md mt-6">
            <form @submit.prevent="submit">
                <TextInput
                    v-model="registerForm.name"
                    name="Name"
                    type="text"
                    :message="registerForm.errors.name"
                />
                <TextInput
                    v-model="registerForm.email"
                    name="Email"
                    type="email"
                    :message="registerForm.errors.email"
                />
                <TextInput
                    v-model="registerForm.password"
                    name="Password"
                    type="password"
                    :message="registerForm.errors.password"
                />
                <TextInput
                    v-model="registerForm.password_confirmation"
                    name="Confirm Password"
                    type="password"
                    :message="registerForm.errors.password_confirmation"
                />
                <button
                    @click.prevent="submit"
                    class="disabled:opacity-50 mt-6 w-full bg-green-800 text-white font-bold py-3 px-6 rounded-2xl hover:bg-green-900 transition duration-200"
                    :disabled="registerForm.processing"
                >
                    Register
                </button>
                <p class="mt-4 text-center text-sm text-gray-600">
                    Already have an account?
                    <!-- //must change this link if i have login file -->
                    <Link
                        :href="route('home')"
                        class="text-green-800 font-bold hover:underline"
                    >
                        Log in
                    </Link>
                </p>
            </form>
        </div>
    </div>
</template>
