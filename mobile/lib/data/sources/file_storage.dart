import 'dart:io';
import 'package:path_provider/path_provider.dart';

class FileStorage {
  const FileStorage();

  Future<File?> localFile(String fileName) async {
    final dir = await getApplicationDocumentsDirectory();
    return File('${dir.path}/$fileName');
  }

  Future<File> saveBytes(String fileName, List<int> bytes) async {
    final file = await localFile(fileName);
    return await file!.writeAsBytes(bytes);
  }
}
