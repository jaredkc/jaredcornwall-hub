import { Head } from '@inertiajs/react';

import SiteLayout from '@/layouts/site-layout';

export default function Index() {
    return (
        <SiteLayout>
            <Head title="Strategy, Design & Development" />

            <div className="">
                <h1 className="mb-1 font-medium">Articles</h1>
                <p className="mb-2">Paginated list of articles</p>
            </div>
        </SiteLayout>
    );
}
