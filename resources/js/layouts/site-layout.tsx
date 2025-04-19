import { Head, Link } from '@inertiajs/react';

import { type ReactNode } from 'react';

interface SiteLayoutProps {
    children: ReactNode;
}

export default ({ children, ...props }: SiteLayoutProps) => (
    <div {...props}>
        <Head title="Strategy, Design & Development">
            <link rel="preconnect" href="https://fonts.bunny.net" />
            <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        </Head>

        <header className="w-full border px-4 py-6 text-sm not-has-[nav]:hidden">
            <div className="container mx-auto flex justify-between gap-8">
                <Link href={route('home')}>JKC</Link>
                <nav className="flex items-center justify-end gap-4">
                    <Link href={route('articles')}>Articles</Link>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </nav>
                <button>Menu</button>
            </div>
        </header>

        <div className="px-4 py-12">
            <main className="container mx-auto">{children}</main>
        </div>
    </div>
);
