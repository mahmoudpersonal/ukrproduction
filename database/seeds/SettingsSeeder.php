<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        DB::table('settings')->insert([
            [
                'key' => 'about',
                'value' => '<p>The UK Radiologist Online provides a high quality, secure and accredited online radiology
                        reporting service. We have expertise which includes plain film X-rays, mammography, CT
                        (computed tomography) and MRI (magnetic resonance imaging).</p><p>All reporting radiologists are highly qualified, based in the UK or in Spain and working as
                        UK Consultants or the Spanish equivalent with specialist registration in radiology.</p>
                    <ul><li>We ensure that we have necessary tools, facilities and procedures to maintain
                            confidentiality and ensure data protection.</li>
                        <li>We pride ourselves in being easy to work with and in providing a high quality and speedy
                            service.</li><li> We report for health services primarily wecan also report directly to patients. </li></ul>',
                'locale_id' => 'en'
            ],
            [
                'key' => 'email',
                'value' => 'info@ukradiologist.online',
                'locale_id' => 'en'
            ],
            [
                'key' => 'address',
                'value' => 'Avenida Cervantes, 14, 6A, Granada 18008, España',
                'locale_id' => 'en'
            ],

            [
                'key' => 'about',
                'value' => '<p>The UK Radiologist Online provides a high quality, secure and accredited online radiology
                        reporting service. We have expertise which includes plain film X-rays, mammography, CT
                        (computed tomography) and MRI (magnetic resonance imaging).</p><p>All reporting radiologists are highly qualified, based in the UK or in Spain and working as
                        UK Consultants or the Spanish equivalent with specialist registration in radiology.</p>
                    <ul><li>We ensure that we have necessary tools, facilities and procedures to maintain
                            confidentiality and ensure data protection.</li>
                        <li>We pride ourselves in being easy to work with and in providing a high quality and speedy
                            service.</li><li> We report for health services primarily wecan also report directly to patients. </li></ul>',
                'locale_id' => 'ar'
            ],
            [
                'key' => 'email',
                'value' => 'info@ukradiologist.online',
                'locale_id' => 'ar'
            ],
            [
                'key' => 'address',
                'value' => 'اسبانيا',
                'locale_id' => 'ar'
            ],

            [
                'key' => 'about',
                'value' => '<p>The UK Radiologist Online provides a high quality, secure and accredited online radiology
                        reporting service. We have expertise which includes plain film X-rays, mammography, CT
                        (computed tomography) and MRI (magnetic resonance imaging).</p><p>All reporting radiologists are highly qualified, based in the UK or in Spain and working as
                        UK Consultants or the Spanish equivalent with specialist registration in radiology.</p>
                    <ul><li>We ensure that we have necessary tools, facilities and procedures to maintain
                            confidentiality and ensure data protection.</li>
                        <li>We pride ourselves in being easy to work with and in providing a high quality and speedy
                            service.</li><li> We report for health services primarily wecan also report directly to patients. </li></ul>',
                'locale_id' => 'es'
            ],
            [
                'key' => 'email',
                'value' => 'info@ukradiologist.online',
                'locale_id' => 'es'
            ],
            [
                'key' => 'address',
                'value' => 'Avenida Cervantes, 14, 6A, Granada 18008, España',
                'locale_id' => 'es'
            ],
        ]);
    }
}
