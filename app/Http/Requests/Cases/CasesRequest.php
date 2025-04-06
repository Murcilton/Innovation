<?php

namespace App\Http\Requests\Cases;

use Illuminate\Foundation\Http\FormRequest;

class CasesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

        $table->enum('status', ['created', 'processing', 'approved', 'rejected', 'in_work', 'success'])->default('created');
        $table->string('description')->nullable();
        $table->string('image')->nullable();
        $table->string('comment')->nullable();
        $table->timestamps();
        ];
    }
}
