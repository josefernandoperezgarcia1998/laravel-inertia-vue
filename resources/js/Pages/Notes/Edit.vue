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
                                <h3 class="text-lg text-gray-900">Editar una nota</h3>
                                <p class="text-sm text-gray-600">Si editas no podrás volver al estado anterior</p>
                            </div>
                        </div>
                        <div class="md:col-span-2 mt-5 md:mt-0">
                            <div class="shadow bg-white md:rounded-md p-4">
                                <form>
                                    <label class="block font-medium text-sm text-gray-700" for="">Resumen</label>
                                    <textarea class="form-input w-full rounded-md shadow-sm" v-model="form.excerpt"></textarea>
                                    <label class="block font-medium text-sm text-gray-700" for="">Contenido</label>
                                    <textarea class="form-input w-full rounded-md shadow-sm" rows="8" v-model="form.content"></textarea>
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Editar</button>
                                </form>
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
        },
        /* Esta es la data (información) que se va a manejar en el formulario de la vista Edit */
        data () {
            return {
                form: {
                    /* Se toma el extracto de la nota */
                    excerpt: this.note.excerpt,
                    /* se toma el contenido de la nota */
                    content: this.note.content,
                }
            }
        }
    }
</script>s