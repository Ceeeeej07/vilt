<script setup>
import { route } from "../../../vendor/tightenco/ziggy/src/js";
</script>

<template>
    <div>
        <header class="bg-green-500 text-white">
            <nav
                class="flex items-center justify-between p-4 max-w-5xl mx-auto"
            >
                <div class="space-x-5">
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link>
                </div>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
