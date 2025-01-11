import Pagination from "@/Components/Pagination";
import { RUANG_JENIS_LAYANAN_CLASS_MAP } from "@/constants";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { RuangLayanan } from "@/types";
import { Head, Link } from "@inertiajs/react";

export default function Index({ruang_layanans}: {ruang_layanans: any;} ) {
  return (
    <AuthenticatedLayout
      header={
        <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
          Ruang
        </h2>
      }
    >
      <Head title="Ruang" />
      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
            <div className="p-6 text-gray-900 dark:text-gray-100">
              <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-gray-500">
                  <tr className="text-nowrap">
                    <th className="px-3 py-2 w-16">ID</th>
                    <th className="px-3 py-2">NAMA</th>
                    <th className="w-24 px-3 py-2">JENIS LAYANAN</th>
                    <th className="px-3 py-2 w-32 text-nowrap">TGL. PEMBUATAN</th>
                    <th className="px-3 py-2 w-28 text-right">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  {ruang_layanans.data.map((item: RuangLayanan) => (
                    <tr key={item.id} className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <td className="px-3 py-2">{item.id}</td>
                      <td className="px-3 py-2">{item.nama}</td>
                      <td className="px-3 py-2">
                        <span
                          className={
                            "inline-block w-24 px-2 py-1 rounded text-white " +
                            // @ts-ignore
                            RUANG_JENIS_LAYANAN_CLASS_MAP[item.jenis_layanan.nama]
                          }
                        >
                          {item.jenis_layanan.nama}
                        </span>                        
                      </td>
                      <td className="px-3 py-2">{item.created_date.formatted}</td>
                      <td className="px-3 py-2">
                        <Link href={route("ruang.edit", item.id)} className="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-1">
                          Edit
                        </Link>
                        <Link href={route("ruang.destroy", item.id)} className="font-medium text-red-600 dark:text-red-500 hover:underline mx-1">
                          Delete
                        </Link>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
              <Pagination links={ruang_layanans.meta.links} />
              {/* <pre>{JSON.stringify(ruang_layanans, undefined, 2)}</pre> */}
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}