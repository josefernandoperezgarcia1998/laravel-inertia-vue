<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px0">
                                <h3 class="text-lg text-gray-900">Detalle de una nota</h3>
                                <p class="text-sm text-gray-600">{{ note.excerpt }}</p>
                            </div>
                        </div>
                        <div class="md:col-span-2 mt-5 md:mt-0">
                            <div class="shadow bg-white md:rounded-md p-4">
                                <p>{{ note.content }}</p>
                                
                                <hr class="my-6">
                                <inertia-link :href="route('notes.index')">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Volver</button>
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        /* Se recibe una propiedad que es una única nota, por eso no es un Array, es un objeto, un único registro*/
        props: {
            note: Object,
        }
    }
</script>s