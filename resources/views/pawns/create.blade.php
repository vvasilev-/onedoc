<x-layout>
    <x-slot:title>
        Нов залог
    </x-slot:title>

    <div class="mx-auto max-w-2xl py-12">
        <form method="post" action="{{ route('pawns.store')}}" class="space-y-12">
            @csrf

            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-base/7 font-semibold text-gray-900">Лична информация</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Име</span>
                            </div>

                            <input
                                type="text"
                                name="first_name"
                                class="input input-bordered w-full max-w-xs @error('first_name') input-error @enderror"
                                autofocus
                            />

                            @error('first_name')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Презиме</span>
                            </div>

                            <input
                                type="text"
                                name="middle_name"
                                class="input input-bordered w-full max-w-xs @error('first_name') input-error @enderror"
                            />

                            @error('middle_name')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Фамилия</span>
                            </div>

                            <input
                                type="text"
                                name="last_name"
                                class="input input-bordered w-full max-w-xs @error('first_name') input-error @enderror"
                            />

                            @error('last_name')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">ЕГН</span>
                            </div>

                            <input
                                type="text"
                                name="id_number"
                                class="input input-bordered w-full max-w-xs @error('id_number') input-error @enderror"
                            />

                            @error('id_number')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-base/7 font-semibold text-gray-900">Лична карта</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Номер</span>
                            </div>

                            <input
                                type="text"
                                name="id_card_number"
                                class="input input-bordered w-full max-w-xs @error('id_card_number') input-error @enderror"
                            />

                            @error('id_card_number')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Издадена от</span>
                            </div>

                            <select
                                name="id_card_issuer"
                                class="select select-bordered w-full max-w-xs @error('id_card_issuer') select-error @enderror"
                            >
                                @foreach ($police_departments as $police_department)
                                    <option
                                        value="{{ $police_department }}"
                                        @selected(old('id_card_issuer', $default_police_department) == $police_department)
                                    >
                                        {{ $police_department }}
                                    </option>
                                @endforeach
                            </select>

                            @error('id_card_issuer')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Издадена на</span>
                            </div>

                            <input
                                type="date"
                                name="id_card_issued_at"
                                class="input input-bordered w-full max-w-xs @error('id_card_issued_at') input-error @enderror"
                            />

                            @error('id_card_issued_at')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Валидна до</span>
                            </div>

                            <input
                                type="date"
                                name="id_card_expires_at"
                                class="input input-bordered w-full max-w-xs @error('id_card_expires_at') input-error @enderror"
                            />

                            @error('id_card_expires_at')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-base/7 font-semibold text-gray-900">Местожителство</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Населено място</span>
                            </div>

                            <input
                                type="text"
                                name="settlement"
                                class="input input-bordered w-full max-w-xs @error('settlement') input-error @enderror"
                            />

                            @error('settlement')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Община</span>
                            </div>

                            <input
                                type="text"
                                name="municipality"
                                class="input input-bordered w-full max-w-xs @error('municipality') input-error @enderror"
                            />

                            @error('municipality')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Област</span>
                            </div>

                            <select
                                name="province"
                                class="select select-bordered w-full max-w-xs @error('province') select-error @enderror"
                            >
                                @foreach ($provinces as $province)
                                    <option
                                        value="{{ $province }}"
                                        @selected(old('province', $default_province) == $province)
                                    >
                                        {{ $province }}
                                    </option>
                                @endforeach
                            </select>

                            @error('province')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Адрес</span>

                                <span class="label-text-alt">(ул. №, бл., вх., ет., ап.)</span>
                            </div>

                            <input
                                type="text"
                                name="address"
                                class="input input-bordered w-full max-w-xs @error('address') input-error @enderror"
                            />

                            @error('address')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-base/7 font-semibold text-gray-900">Залог</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Сума</span>
                            </div>

                            <input
                                type="number"
                                min="1"
                                name="principal"
                                class="input input-bordered w-full max-w-xs @error('address') input-error @enderror"
                            />

                            @error('principal')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Административна такса</span>
                            </div>

                            <select
                                name="management_fee_rate"
                                class="select select-bordered w-full max-w-xs @error('management_fee_rate') select-error @enderror"
                            >
                                @foreach ($management_fee_rates as $management_fee_rate)
                                    <option
                                        value="{{ $management_fee_rate }}"
                                        @selected(old('management_fee_rate', $default_management_fee_rate) == $management_fee_rate)
                                    >
                                        {{ $management_fee_rate }}%
                                    </option>
                                @endforeach
                            </select>

                            @error('management_fee_rate')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Вещ</span>
                            </div>

                            <input
                                type="text"
                                name="item"
                                class="input input-bordered w-full max-w-xs @error('item') input-error @enderror"
                            />

                            @error('item')
                                <div class="label pt-2">
                                    <span class="label-text text-sm text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Марка</span>
                            </div>

                            <input type="text" name="item_brand" class="input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Модел</span>
                            </div>

                            <input type="text" name="item_model" class="input input-bordered w-full max-w-xs" />
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Година на производство</span>
                            </div>

                            <input type="text" name="item_year_of_manufacture" class="input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Сериен номер</span>
                            </div>

                            <input type="text" name="item_serial_number" class="input input-bordered w-full max-w-xs" />
                        </label>
                    </div>

                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Модел</span>
                            </div>

                            <input type="text" name="item_model" class="input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label class="form-control w-full max-w-xs">
                            <div class="label pb-2">
                                <span class="label-text">Бележки</span>
                            </div>

                            <textarea class="textarea textarea-bordered" name="item_notes"></textarea>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-x-6">
                <button type="submit" class="btn">Разпечатай</button>
            </div>
        </form>
    </div>
</x-layout>
