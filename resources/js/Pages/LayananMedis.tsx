import { Separator } from '@/components/ui/separator';
import AuthenticatedRMLayout from '@/Layouts/AuthenticatedRMLayout';
import { Layanan, PageProps, PaginatedData } from '@/types';
import { Head } from '@inertiajs/react';
import { LayoutGrid } from 'lucide-react';
import { useState } from 'react';
import _ from 'lodash';

export default function LayananMedis({auth, layanans}: PageProps<{layanans: PaginatedData<Layanan>}>) {
  console.log(layanans);
  const [dataLayanan, setDataLayanan] = useState(layanans.data);
  const [selectedLayanan, setSelectedLayanan] = useState<Layanan|null>(null);

  const handleClickPasien = (id: number) => {
    let layanan = _.find(dataLayanan, function(layanan) {
      return layanan.id == id;
    })

    if(layanan != undefined) {
      setSelectedLayanan(layanan);
    }
  }

  return (
    <AuthenticatedRMLayout>
      <Head title="Layanan Pasien" />

      <div className="flex flex-row p-1 gap-2" style={{height: 'calc(100vh - 68px)'}}>
        <div className="w-1/4 min-w-80 h-full bg-white shadow-sm rounded-lg">
          <div className='flex justify-items-stretch items-center p-2 rounded-t-lg'>
            <LayoutGrid size={16}/> 
            <h4 className="p-2 text-base font-semibold tracking-tight">
              Register kunjungan pasien
            </h4>
          </div>
          <Separator className="mb-1" />
          <ul>
            { dataLayanan.map((layanan) => (
              <li key={layanan.id} >
                <div 
                  onClick={(e) => handleClickPasien(layanan.id)} 
                  className={
                    `px-3 py-1 m-1 ${selectedLayanan !== null && selectedLayanan.id ==layanan.id ? 'bg-yellow-200' : 'bg-gray-100 hover:bg-gray-200'} border-slate-200 border-solid border-[1px]`
                  }
                >
                  <span className='font-semibold'>{layanan.kunjungan.pasien.nama}</span><br />
                  <span className='text-xs font-semibold text-green-600'>tgl. registrasi : </span>
                  <span className='text-xs font-bold text-green-600'>{layanan.tanggal_mulai.formatted}</span>
                </div>                
              </li>
            ))
            }
          </ul>
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
