import Pagination from "@/Components/Pagination";
import { Input } from "@/components/ui/input";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { JenisLayanan } from "@/types";
import { Head, Link } from "@inertiajs/react";
import { FilePen, Trash2 } from "lucide-react";

export default function Index({jenis_layanans}: {jenis_layanans: any;} ) {
  return (
    <AuthenticatedLayout
      header={
        <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
          Layanan
        </h2>
      }
    >
      <Head title="Ruang" />
      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
            <div className="p-6 text-gray-900 dark:text-gray-100"> 
              <Table>
                <TableHeader>
                  <TableHead className="w-16 h-6">Id</TableHead>
                  <TableHead className="h-6">Nama</TableHead>
                  <TableHead className="w-32 text-nowrap h-6">Tgl. pembuatan</TableHead>
                  <TableHead className="w-20 h-6">Action</TableHead>
                </TableHeader>
                <TableHeader className="border-b-2 border-gray-500">
                  <TableHead></TableHead>
                  <TableHead className="pb-1"><Input /></TableHead>
                  <TableHead></TableHead>
                  <TableHead></TableHead>
                </TableHeader>
                <TableBody>
                  {jenis_layanans.data.map((item: JenisLayanan) => (
                    <TableRow key={item.id}>
                      <TableCell className="font-medium">{item.id}</TableCell>
                      <TableCell className="font-medium">{item.nama}</TableCell>
                      <TableCell className="font-medium">{item.created_date.formatted}</TableCell>
                      <TableCell className="flex gap-1">
                        <Link href={route("layanan.edit", item.id)} className="text-blue-600 dark:text-blue-500 mx-1">
                          <FilePen size={16}/>
                        </Link>
                        <Link href={route("layanan.destroy", item.id)} className="text-red-600 dark:text-red-500 mx-1">
                          <Trash2 size={16}/>
                        </Link>
                      </TableCell>
                    </TableRow>
                  ))}
                </TableBody>
              </Table>     
              <Pagination links={jenis_layanans.meta.links} />        
              {/* <pre>{JSON.stringify(jenis_layanans, undefined, 2)}</pre> */}
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  );
}