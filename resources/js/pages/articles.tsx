import { Head } from '@inertiajs/react';

import SiteLayout from '@/layouts/site-layout';

export default function Index() {
    return (
        <SiteLayout>
            <Head title="Strategy, Design & Development" />

            <div className="prose lg:prose-xl dark:prose-invert">
                <h1>Articles</h1>
                <p>Paginated list of articles</p>
            </div>
        </SiteLayout>
    );
}
