<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Register | " />
    <div class="mt-10 bg-white flex flex-col items-center justify-center px-4">
        <h1 class="text-3xl font-bold underline">Register</h1>

        <div class="w-full max-w-md mt-6">
            <form>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Name</label>
                    <input
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="text"
                        required
                        placeholder="Name"
                    />
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Email</label>
                    <input
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="text"
                        required
                        placeholder="Email@example.com"
                    />
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Password</label>
                    <input
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="password"
                        required
                        placeholder="Password"
                    />
                </div>
                <div class="flex flex-col gap-4 w-full mt-4">
                    <label class="font-bold">Confirm Password</label>
                    <input
                        class="rounded-2xl border border-gray-300 bg-gray-50 px-3 h-12 text-base text-black placeholder:text-black placeholder:opacity-50 outline-none transition duration-200 focus:border-black focus:ring-2 focus:ring-black"
                        type="password"
                        required
                        placeholder="Confirm Password"
                    />
                </div>
                <button
                    class="mt-6 w-full bg-green-800 text-white font-bold py-3 px-6 rounded-2xl hover:bg-green-900 transition duration-200"
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
