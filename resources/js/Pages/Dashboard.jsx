import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';


export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />


            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="mb-10" >
                        <div className="px-6 py-4 text-sm text-gray-600 bg-blue-100 border border-blue-200 sm:rounded-lg shadow-sm mb-6">
                            Enjoy Your Free Trail ! Do not forget to choose a <a href="/billing" className="font-semibold underline">Subscription Plan</a>
                        </div>
                    </div>
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                          
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
