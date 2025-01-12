import { Separator } from '@/components/ui/separator';
import AuthenticatedRMLayout from '@/Layouts/AuthenticatedRMLayout';
import { Head } from '@inertiajs/react';
import { LayoutGrid } from 'lucide-react';

export default function RekamMedis() {
  return (
    <AuthenticatedRMLayout>
      <Head title="Layanan Pasien" />

      <div className="flex flex-row p-1 gap-2" style={{height: 'calc(100vh - 68px)'}}>
        <div className="w-1/4 min-w-80 h-full bg-white shadow-sm rounded-lg">
          <div className='flex justify-items-stretch items-center p-2'>
            <LayoutGrid size={16}/> 
            <h4 className="p-2 text-base font-semibold tracking-tight">
              Register kunjungan pasien
            </h4>
          </div>
          <Separator className="mb-1" />
        </div>
        <div className="h-full w-3/4 ">
          <div className="h-full overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
            <div className="p-6 text-gray-900 dark:text-gray-100">
              You're logged in!
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedRMLayout>
  );
}
