<script setup>
import { useForm } from "@inertiajs/vue3";

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
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Name</label>
                    <input
                        v-model="registerForm.name"
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="text"
                        required
                        placeholder="Name"
                    />
                    <small
                        class="text-red-600"
                        v-if="registerForm.errors.name"
                        >{{ registerForm.errors.name }}</small
                    >
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Email</label>
                    <input
                        v-model="registerForm.email"
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="text"
                        required
                        placeholder="Email@example.com"
                    />
                    <small
                        class="text-red-600"
                        v-if="registerForm.errors.email"
                        >{{ registerForm.errors.email }}</small
                    >
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Password</label>
                    <input
                        v-model="registerForm.password"
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="password"
                        required
                        placeholder="Password"
                    />
                    <small
                        class="text-red-600"
                        v-if="registerForm.errors.password"
                        >{{ registerForm.errors.password }}</small
                    >
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Confirm Password</label>
                    <input
                        v-model="registerForm.password_confirmation"
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="password"
                        required
                        placeholder="Confirm Password"
                    />
                    <small
                        class="text-red-600"
                        v-if="registerForm.errors.password_confirmation"
                        >{{ registerForm.errors.password_confirmation }}</small
                    >
                </div>
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
