<?php

namespace Database\Seeders;

use App\Models\Icon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icons = [
            [
                'name' => 'home',
                'label' => 'Home',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/home.svg',
            ],
            [
                'name' => 'user',
                'label' => 'User',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/user.svg',
            ],
            [
                'name' => 'users',
                'label' => 'Users',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/users.svg',
            ],
            [
                'name' => 'cog',
                'label' => 'Settings',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/cog.svg',
            ],
            [
                'name' => 'envelope',
                'label' => 'Email',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/envelope.svg',
            ],
            [
                'name' => 'lock',
                'label' => 'Lock',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/lock.svg',
            ],
            [
                'name' => 'unlock',
                'label' => 'Unlock',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/unlock.svg',
            ],
            [
                'name' => 'calendar',
                'label' => 'Calendar',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/calendar.svg',
            ],
            [
                'name' => 'clipboard',
                'label' => 'Clipboard',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/clipboard.svg',
            ],
            [
                'name' => 'clock',
                'label' => 'Clock',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/clock.svg',
            ],
            [
                'name' => 'file',
                'label' => 'File',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/file.svg',
            ],
            [
                'name' => 'folder',
                'label' => 'Folder',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/folder.svg',
            ],
            [
                'name' => 'search',
                'label' => 'Search',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/search.svg',
            ],
            [
                'name' => 'tag',
                'label' => 'Tag',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/tag.svg',
            ],
            [
                'name' => 'trash',
                'label' => 'Trash',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/trash.svg',
            ],
            [
                'name' => 'diamond',
                'label' => 'Diamond',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/diamond.svg',
            ],
            [
                'name' => 'heart',
                'label' => 'Heart',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/heart.svg',
            ],
            [
                'name' => 'star',
                'label' => 'Star',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/star.svg',
            ],
            [
                'name' => 'camera',
                'label' => 'Camera',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/camera.svg',
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/image.svg',
            ],
            [
                'name' => 'music',
                'label' => 'Music',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/music.svg',
            ],
            [
                'name' => 'video',
                'label' => 'Video',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/video.svg',
            ],
            [
                'name' => 'microphone',
                'label' => 'Microphone',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/microphone.svg',
            ],
            [
                'name' => 'headphones',
                'label' => 'Headphones',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/headphones.svg',
            ],
            [
                'name' => 'globe',
                'label' => 'Globe',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe.svg',
            ],
            [
                'name' => 'map',
                'label' => 'Map',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/map.svg',
            ],
            [
                'name' => 'compass',
                'label' => 'Compass',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/compass.svg',
            ],
            [
                'name' => 'sun',
                'label' => 'Sun',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/sun.svg',
            ],
            [
                'name' => 'moon',
                'label' => 'Moon',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/moon.svg',
            ],
            [
                'name' => 'lightbulb',
                'label' => 'Lightbulb',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/lightbulb.svg',
            ],
            [
                'name' => 'bolt',
                'label' => 'Bolt',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/bolt.svg',
            ],
            [
                'name' => 'certificate',
                'label' => 'Certificate',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/certificate.svg',
            ],
            [
                'name' => 'book',
                'label' => 'Book',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/book.svg',
            ],
            [
                'name' => 'briefcase',
                'label' => 'Briefcase',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/briefcase.svg',
            ],
            [
                'name' => 'code',
                'label' => 'Code',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/code.svg',
            ],
            [
                'name' => 'database',
                'label' => 'Database',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/database.svg',
            ],
            [
                'name' => 'desktop',
                'label' => 'Desktop',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/desktop.svg',
            ],
            [
                'name' => 'mobile',
                'label' => 'Mobile',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/mobile.svg',
            ],
            [
                'name' => 'tablet',
                'label' => 'Tablet',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/tablet.svg',
            ],
            [
                'name' => 'server',
                'label' => 'Server',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/server.svg',
            ],
            [
                'name' => 'terminal',
                'label' => 'Terminal',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/terminal.svg',
            ],
            [
                'name' => 'gavel',
                'label' => 'Gavel',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/gavel.svg',
            ],
            [
                'name' => 'graduation-cap',
                'label' => 'Graduation Cap',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/graduation-cap.svg',
            ],
            [
                'name' => 'globe-americas',
                'label' => 'Americas',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-americas.svg',
            ],
            [
                'name' => 'globe-europe',
                'label' => 'Europe',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-europe.svg',
            ],
            [
                'name' => 'globe-africa',
                'label' => 'Africa',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-africa.svg',
            ],
            [
                'name' => 'globe-asia',
                'label' => 'Asia',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-asia.svg',
            ],
            [
                'name' => 'globe-australia',
                'label' => 'Australia',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-australia.svg',
            ],
            [
                'name' => 'globe-stand',
                'label' => 'Globe Stand',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-stand.svg',
            ],
            [
                'name' => 'globe-americas',
                'label' => 'Americas',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-americas.svg',
            ],
            [
                'name' => 'globe-europe',
                'label' => 'Europe',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-europe.svg',
            ],
            [
                'name' => 'globe-africa',
                'label' => 'Africa',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-africa.svg',
            ],
            [
                'name' => 'globe-asia',
                'label' => 'Asia',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-asia.svg',
            ],
            [
                'name' => 'globe-australia',
                'label' => 'Australia',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-australia.svg',
            ],
            [
                'name' => 'globe-stand',
                'label' => 'Globe Stand',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/globe-stand.svg',
            ],
            [
                'name' => 'cloud',
                'label' => 'Cloud',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/cloud.svg',
            ],
            [
                'name' => 'cloud-download-alt',
                'label' => 'Cloud Download',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/cloud-download-alt.svg',
            ],
            [
                'name' => 'cloud-upload-alt',
                'label' => 'Cloud Upload',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/cloud-upload-alt.svg',
            ],
            [
                'name' => 'wifi',
                'label' => 'WiFi',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/wifi.svg',
            ],
            [
                'name' => 'signal',
                'label' => 'Signal',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/signal.svg',
            ],
            [
                'name' => 'battery-full',
                'label' => 'Battery Full',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/battery-full.svg',
            ],
            [
                'name' => 'battery-empty',
                'label' => 'Battery Empty',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/battery-empty.svg',
            ],
            [
                'name' => 'battery-half',
                'label' => 'Battery Half',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/battery-half.svg',
            ],
            [
                'name' => 'battery-quarter',
                'label' => 'Battery Quarter',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/battery-quarter.svg',
            ],
            [
                'name' => 'battery-three-quarters',
                'label' => 'Battery Three Quarters',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/battery-three-quarters.svg',
            ],
            [
                'name' => 'plug',
                'label' => 'Plug',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/plug.svg',
            ],
            [
                'name' => 'barcode',
                'label' => 'Barcode',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/barcode.svg',
            ],
            [
                'name' => 'qrcode',
                'label' => 'QR Code',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/qrcode.svg',
            ],
            [
                'name' => 'calculator',
                'label' => 'Calculator',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/calculator.svg',
            ],
            [
                'name' => 'calendar',
                'label' => 'Calendar',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/calendar.svg',
            ],
            [
                'name' => 'camera',
                'label' => 'Camera',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/camera.svg',
            ],
            [
                'name' => 'camera-retro',
                'label' => 'Camera Retro',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/camera-retro.svg',
            ],
            [
                'name' => 'th-large',
                'label' => 'Th Large',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/th-large.svg',
            ],
            [
                'name' => 'th',
                'label' => 'Th',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/th.svg',
            ],
            [
                'name' => 'th-list',
                'label' => 'Th List',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/th-list.svg',
            ],
            [
                'name' => 'address-book',
                'label' => 'Address Book',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/address-book.svg',
            ],
            [
                'name' => 'address-card',
                'label' => 'Address Card',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/address-card.svg',
            ],
            [
                'name' => 'envelope',
                'label' => 'Envelope',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/envelope.svg',
            ],
            [
                'name' => 'envelope-open',
                'label' => 'Envelope Open',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/envelope-open.svg',
            ],
            [
                'name' => 'phone',
                'label' => 'Phone',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/phone.svg',
            ],
            [
                'name' => 'mobile-alt',
                'label' => 'Mobile Alt',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/mobile-alt.svg',
            ],
            [
                'name' => 'fax',
                'label' => 'Fax',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/fax.svg',
            ],
            [
                'name' => 'rss',
                'label' => 'RSS',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/rss.svg',
            ],
            [
                'name' => 'rss-square',
                'label' => 'RSS Square',
                'svg_url' => 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/svgs/solid/rss-square.svg',
            ],
        ];

//        Icon::insert($icons);
        foreach ($icons as $icon) {
            Icon::create([
                'label' => $icon['label'],
                'svg_url' => $icon['svg_url'],
            ]);
        }
        foreach ($icons as $icon) {
            Icon::create([
                'label' => $icon['label'],
                'svg_url' => $icon['svg_url'],
            ]);
        }
        foreach ($icons as $icon) {
            Icon::create([
                'label' => $icon['label'],
                'svg_url' => $icon['svg_url'],
            ]);
        }
        foreach ($icons as $icon) {
            Icon::create([
                'label' => $icon['label'],
                'svg_url' => $icon['svg_url'],
            ]);
        }
    }
}
