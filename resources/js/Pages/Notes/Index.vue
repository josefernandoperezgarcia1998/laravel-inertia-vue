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
                                <h3 class="text-lg text-gray-900">Listado de notas</h3>
                                <p class="text-sm text-gray-600">Toma el registro correcto y ejecuta cualquier función de un CRUD</p>
                            </div>
                        </div>
                        <div class="md:col-span-2 mt-5 md:mt-0">
                            <div class="shadow bg-white md:rounded-md p-4">
                                <inertia-link :href="route('notes.create')" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                                    Crear nota
                                </inertia-link>
                                <table>
                                    <tr v-for="note in notes" v-bind:key="note">
                                        <td class="border px-4 pý-2">
                                            {{note.excerpt}}
                                        </td>
                                        <td class="px-4 pý-2">
                                            <inertia-link :href="route('notes.show', note.id)">
                                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Ver</button>
                                            </inertia-link>
                                        </td>
                                        <td class="px-4 pý-2">
                                            <inertia-link :href="route('notes.edit', note.id)">
                                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                            </inertia-link>
                                        </td>
                                    </tr>
                                </table>
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
        /* props va a contener las propiedades de la vista, en este caso es donde se junta con el back
        y pide las notas que se pasaron en el controlador que es un arreglo */
        props: {
            notes: Array,
        }
    }
</script>s