import { Head } from '@inertiajs/react';

import SiteLayout from '@/layouts/site-layout';

export default function Index() {
    return (
        <SiteLayout>
            <Head title="Strategy, Design & Development" />

            <div className="prose lg:prose-xl dark:prose-invert">
                <h1>Primary site landing page</h1>
                <p>Start with a list of recent articles</p>
            </div>
        </SiteLayout>
    );
}
