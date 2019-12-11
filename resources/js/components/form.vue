<template>
    <div id="app">
        <form>
            <div v-if="step === 1" class="card-body">

                <div class="form-group row">
                    <label for="shirtsize" class="col-md-4 col-form-label text-md-right">Bitte wählen sie ihr Thema</label>
                    <div class="col-md-6">
                        <select id="shirtsize" name="shirtsize" class="form-control" v-model="registration.shirtsize">
                            <option value="S">Erstgespräch</option>
                            <option value="M">Datenschutzberatung</option>
                            <option value="L">Erbrecht</option>
                            <option value="XL">Prozessvertretung</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="ja" class="col-md-7 col-form-label text-md-center">Besteht eine Rechtsschutzversicherung?</label>
                        <input type="radio" class="custom-radio" name="drone" value="ja" id="ja">
                        <label for="ja">Ja</label>
                        <input type="radio" class="custom-radio" name="drone" value="nein" id="nein" style="margin-left: 10px;">
                        <label for="nein">Nein</label>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="ja" class="col-md-7 col-form-label text-md-center">Haben sie einen anderen Rechtsvertreter?</label>
                        <input type="radio" class="custom-radio" name="drone" value="ja" id="ja">
                        <label for="ja">Ja</label>
                        <input type="radio" class="custom-radio" name="drone" value="nein" id="nein" style="margin-left: 10px;">
                        <label for="nein">Nein</label>
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button @click.prevent="next()" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </div>


            <div v-if="step === 2" class="card-body">

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="ja" class="col-md-7 col-form-label text-md-center">Besteht eine Rechtsschutzversicherung?</label>
                        <input type="radio" class="custom-radio" name="drone" value="ja" id="ja">
                        <label for="ja">Ja</label>
                        <input type="radio" class="custom-radio" name="drone" value="nein" id="nein" style="margin-left: 10px;">
                        <label for="nein">Nein</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="ja" class="col-md-7 col-form-label text-md-center">Haben sie einen anderen Rechtsvertreter?</label>
                        <input type="radio" class="custom-radio" name="drone" value="ja" id="ja">
                        <label for="ja">Ja</label>
                        <input type="radio" class="custom-radio" name="drone" value="nein" id="nein" style="margin-left: 10px;">
                        <label for="nein">Nein</label>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                <button @click.prevent="prev()" class="btn btn-primary">Previous</button>
                <button @click.prevent="next()" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </div>

            <div v-if="step === 3" class="card-body">


                <div class="form-group row">
                    <label for="numtickets" class="col-md-4 col-form-label text-md-right">Number of Tickets:</label>
                    <div class="col-md-6">
                    <input id="numtickets" name="numtickets" type="number" class="form-control" v-model="registration.numtickets">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="shirtsize" class="col-md-4 col-form-label text-md-right">Shirt Size:</label>
                    <div class="col-md-6">
                    <select id="shirtsize" name="shirtsize" class="form-control" v-model="registration.shirtsize">
                        <option value="S">Erstgespräch</option>
                        <option value="M">Datenschutzberatung</option>
                        <option value="L">Erbrecht</option>
                        <option value="XL">Prozessvertretung</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                <button @click.prevent="prev()" class="btn btn-primary">Previous</button>
                <button @click.prevent="submit()" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

</template>
<script>
    export default {
        data: function () {
            return {
                step: 1,
                registration: {
                    name: null,
                    email: null,
                    street: null,
                    city: null,
                    state: null,
                    numtickets: 0,
                    shirtsize: 'XL'
                }
            }
        },
        methods: {
            prev() {
                this.step--;
            },
            next() {
                this.step++;
            },
            submit() {
                alert('Submit to blah and show blah and etc.');
            }
        }
    }
</script>
