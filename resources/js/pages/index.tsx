import { Head } from '@inertiajs/react';

import SiteLayout from '@/layouts/site-layout';

export default function Index() {
    return (
        <SiteLayout>
            <Head title="Strategy, Design & Development" />

            <div className="">
                <h1 className="mb-1 font-medium">Primary site landing page</h1>
                <p className="mb-2">Start with a list of recent articles</p>
            </div>
        </SiteLayout>
    );
}
